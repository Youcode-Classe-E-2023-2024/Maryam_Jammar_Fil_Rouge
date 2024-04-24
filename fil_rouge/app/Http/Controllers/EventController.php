<?php

namespace App\Http\Controllers;

use App\Mail\ApproveEventEmail;
use App\Mail\NewsletterEmail;
use App\Models\Category;
use App\Models\Event;
use App\Models\Member;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showForm()
    {
        $content = file_get_contents('https://gist.githubusercontent.com/rogargon/5534902/raw/434445021e155240ca78e378f10f70391dd594ea/countries.json');
        $data = json_decode($content);

        $categories = Category::all();
        return view('organizer.createEvent', compact('data', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::id();

        $request->validate([
            'title' => 'required',
            'event_type' => 'required',
            'price' => 'required',
            'date' => 'required',
            'time' => 'required',
            'description' => 'required',
            'image' => 'required|image',
            'category' => 'required',
        ]);

        $defaultCountry = $request->event_type === 'venue' ? 'Unknown' : 'Online';
        $defaultCity = $request->event_type === 'venue' ? 'Unknown' : 'Online';


        if ($request->event_type === 'venue') {
            $request->validate([
                'country' => 'required',
                'city' => 'required',
            ]);
        }

        // from category
//        $category = $request->input('category');

//        dd($category);
        if ($request->hasFile('image')) {
            $fileName = time() . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('image', $fileName, 'public');
            $picturePath = Storage::url($path);
        } else {
            $picturePath = null;
        }

        $eventCreated = Event::create([
            'title' => $request->title,
            'country' => $request->country ?? $defaultCountry, // Utiliser la valeur par défaut si la valeur est vide
            'city' => $request->city ?? $defaultCity, // Utiliser la valeur par défaut si la valeur est vide
            'event_type' => $request->event_type,
            'date' => $request->date,
            'time' => $request->time,
            'price' => $request->price,
            'nbr_place' => $request->nbr_place,
            'description' => $request->description,
            'image' => $picturePath,
            'creator' => $user,
            'category' => $request->category,
        ]);

        if ($eventCreated) {
            $this->sendEmailToAdmin($user);
        }

        return back();
    }


    private function sendEmailToAdmin()
    {
        $user = Auth::user();

        $adminRole = User::where('role', '1')->get();

        if ($adminRole) {
            foreach ($adminRole as $admin) {
                Mail::to($admin->email)->send(new ApproveEventEmail($user));
            }
        }
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    //show-event-description
    public function ShowEventDescription($id)
    {
//        $event = Event::with('category')->find($id);
        $content = file_get_contents('https://gist.githubusercontent.com/rogargon/5534902/raw/434445021e155240ca78e378f10f70391dd594ea/countries.json');
        $data = json_decode($content);

        $categories = Category::all();

        $event = Event::find($id);

        $userRole = "organizer";

        return view('description', compact('event', 'userRole', 'data', 'categories'));
    }


    public function editEvent($id)
    {
        $content = file_get_contents('https://gist.githubusercontent.com/rogargon/5534902/raw/434445021e155240ca78e378f10f70391dd594ea/countries.json');
        $data = json_decode($content);

        $categories = Category::all();

        $event = Event::find($id);

        return view('organiser.updateEvent', compact('event', 'data', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function updateEvent(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $user = Auth::id();

        $request->validate([
            'title' => 'required',
            'event_type' => 'required',
            'price' => 'required',
            'date' => 'required',
            'time' => 'required',
            'nbr_place' => 'required',
            'description' => 'required',
            'category' => 'required',
        ]);

        if ($request->event_type === 'venue') {
            $request->validate([
                'country' => 'required',
                'city' => 'required',
            ]);
        }

        if ($request->hasFile('image')) {
            $fileName = time() . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('image', $fileName, 'public');
            $picturePath = Storage::url($path);

            if ($event->image) {
                Storage::disk('public')->delete($event->image);
            }
        } else {
            $picturePath = $event->image;
        }

        $event->update([
            'title' => $request->title,
            'country' => $request->country ?? 'Online',
            'city' => $request->city ?? 'Unknown',
            'event_type' => $request->event_type,
            'date' => $request->date,
            'time' => $request->time,
            'nbr_place' => $request->nbr_place,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $picturePath,
            'creator' => $user,
            'category' => $request->category,
        ]);

        return redirect('/myEvents');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function deleteEvent(string $id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect('/myEvents');
    }


    //check events requests
    public function CheckEvent()
    {
        $events = Event::where('status', 'En attente')->paginate(4);

        return view('admin.check-events', compact('events'));
    }

    //approve-events
    public function approveEvent($id)
    {
        $event = Event::findOrFail($id);
        $event->status = 'Public';
        $event->save();

        if ($event) {
            $this->sendEmailToSubsbribers();
        }

        return redirect()->back();
    }

    private function sendEmailToSubsbribers()
    {
        $subscribers = Member::where('status', 'subscribed')->get();

        if ($subscribers) {
            foreach ($subscribers as $subscriber) {
                Mail::to($subscriber->email)->send(new NewsletterEmail($subscriber->email));
            }
        }

    }

    //decline events
    public function declineEvent($id)
    {
        $event = Event::findOrFail($id);
        $event->status = 'Decline';
        $event->save();

        return redirect()->back();
    }

}
