<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $categories = Category::limit(5)->get();
        $allCategories = Category::all();

//        $LatestEvents = Event::limit(5)->where('status', 'Public')->get();
        $events = Event::where('status', 'Public')
            ->where('date', '>=', now()->toDateString())
            ->paginate(6);
        $pastEvents = Event::where('status', 'Public')
            ->where(function ($query) {
                $query->where('nbr_place', 0)
                    ->orWhere('date', '<', now()->toDateString());
            })
            ->paginate(6);

        return view('welcome', compact('events', 'categories', 'allCategories', 'pastEvents'));
    }

    public function tomorrow()
    {
        $categories = Category::limit(5)->get();
        $allCategories = Category::all();

        $events = Event::where('status', 'Public')
            ->where('date', '>=', now()->toDateString())
            ->paginate(6);
        $pastEvents = Event::where('status', 'Public')
            ->where(function ($query) {
                $query->where('nbr_place', 0)
                    ->orWhere('date', '<', now()->toDateString());
            })
            ->paginate(6);


        $events = Event::whereDate('date', '=', Carbon::tomorrow()->toDateString())
            ->where('status', 'Public')
            ->paginate(6);

        return view('welcome', compact('events', 'categories', 'allCategories', 'pastEvents'));
    }

}
