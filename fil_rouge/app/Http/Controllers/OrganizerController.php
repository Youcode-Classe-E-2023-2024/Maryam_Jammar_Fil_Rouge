<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
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
}
