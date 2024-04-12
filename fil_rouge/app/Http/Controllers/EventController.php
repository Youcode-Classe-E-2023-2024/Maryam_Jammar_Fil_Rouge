<?php

namespace App\Http\Controllers;

use App\Mail\ApproveEventEmail;
use App\Models\Category;
use App\Models\Event;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::id();

        $request->validate([
            'title' => 'required',
            'country' => '',
            'city' => '',
            'event_type' => 'required',
            'price' => 'required',
            'date' => 'required',
            'time' => 'required',
            'description' => 'required',
            'image' => 'required|image',
            'category' => 'required',
        ]);

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
            'country' => $request->country,
            'city' => $request->city,
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
     * @param  int  $id
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
        $event = Event::find($id);
        $userRole = "organizer";

        return view('description', compact('event', 'userRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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

        return redirect()->back();
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
