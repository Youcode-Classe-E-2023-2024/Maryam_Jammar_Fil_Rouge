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

        $events = Event::all()->where('creator', $user);
        $categories = Category::paginate(4);

        return view('organizer.dashboard', compact('categories', 'events'));
    }
}
