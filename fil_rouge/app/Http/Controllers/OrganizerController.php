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

        $events = Event::paginate(3)->where('creator', $user);
        $categories = Category::paginate(4);

        return view('organizer.dashboard', compact('categories', 'events'));
    }

    public function myEvents()
    {
        $user = Auth::user()->id;

        $events = Event::where('creator', $user)->paginate(6);
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
}
