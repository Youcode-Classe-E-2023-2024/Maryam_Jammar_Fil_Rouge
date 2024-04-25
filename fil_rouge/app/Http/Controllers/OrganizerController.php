<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\Reservation;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrganizerController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user()->id;

        $events = Event::where('creator', $user)->orderBy('created_at', 'desc')->paginate(3);
        $categories = Category::paginate(4);

        $content = file_get_contents('https://gist.githubusercontent.com/rogargon/5534902/raw/434445021e155240ca78e378f10f70391dd594ea/countries.json');
        $data = json_decode($content);

        $client = User::all();

        $event = Event::all();
        $reservations = Reservation::whereIn('event', function($query) use ($user) {
            $query->select('id')->from('events')->where('creator', $user);
        })->with(['event', 'client'])->get();

//        dd($reservations);
        $newReservations = [];
        foreach($reservations as $reservation) {
            $user = User::where('id', $reservation->client)->get();
            $event = User::where('id', $reservation->event)->get();
            $newReservations[] = [
                'event' => $event,
                'user' => $user
            ];
        }
//        dd($newReservations[0]['user'][0] );

        return view('organizer.dashboard', compact('categories', 'events', 'data', 'client', 'event', 'newReservations', 'user'));
    }

    public function myEvents()
    {
        $user = Auth::user()->id;

        $events = Event::where('creator', $user)->orderBy('created_at', 'desc')->paginate(6);
        $categories = Category::paginate(4);

        return view('organizer.myEvents', compact('categories', 'events'));
    }

    public function statistics()
    {
        $user = Auth::user()->id;

        $totalEvents = Event::where('creator', $user)->count();
        $totalCategories = Category::count();
        $totalReservations = Reservation::whereIn('event', function($query) use ($user) {
            $query->select('id')->from('events')->where('creator', $user);
        })->count();

        $events = Event::where('creator', $user)->count();
        $reservations = Reservation::whereIn('event', function($query) use ($user) {
            $query->select('id')->from('events')->where('creator', $user);
        })->count();
        $users = User::where('role', '3')->count();

        $client = User::all();

        $event = Event::all();
        $LatestReservatios = Reservation::whereIn('event', function($query) use ($user) {
            $query->select('id')->from('events')->where('creator', $user);
        })->with(['event', 'client'])->limit(5)->get();


        return view('organizer.statistics', compact('totalEvents', 'totalCategories', 'totalReservations', 'events', 'reservations', 'users', 'LatestReservatios', 'event', 'client'));
    }

    public function reservations(){

        $user = Auth::user()->id;

        $client = User::all();

        $event = Event::all();
        $reservations = Reservation::whereIn('event', function($query) use ($user) {
            $query->select('id')->from('events')->where('creator', $user);
        })->with(['event', 'client'])->paginate(6);

        return view('organizer.reservations', compact('client', 'event', 'reservations'));
    }

    public function latestReservations(){
        $user = Auth::user()->id;

        $client = User::all();

        $event = Event::all();
        $reservations = Reservation::whereIn('event', function($query) use ($user) {
            $query->select('id')->from('events')->where('creator', $user);
        })->with(['event', 'client'])->paginate(6);
        return view('organizer.right_side', compact('client', 'event', 'reservations'));
    }

    public function categories(){

        $content = file_get_contents('https://gist.githubusercontent.com/rogargon/5534902/raw/434445021e155240ca78e378f10f70391dd594ea/countries.json');
        $data = json_decode($content);

        $categories = Category::paginate(18);
        return view('organizer.categories', compact('categories', 'data'));

    }
}
