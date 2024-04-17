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

    public function thisWeek()
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


        $startOfWeek = Carbon::now()->startOfWeek()->toDateString();

        $endOfWeek = Carbon::now()->endOfWeek()->toDateString();

        $events = Event::whereBetween('date', [$startOfWeek, $endOfWeek])
            ->where('status', 'Public')
            ->paginate(6);

        return view('welcome', compact('events', 'categories', 'allCategories', 'pastEvents'));
    }

    public function thisMonth()
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


        $startOfMonth = now()->startOfMonth();
        $endOfMonth = now()->endOfMonth();

        // Filtrer les événements de ce mois
        $events = Event::whereYear('date', $startOfMonth->year)
            ->whereMonth('date', $startOfMonth->month)
            ->where('status', 'Public')
            ->paginate(6);


        return view('welcome', compact('events', 'categories', 'allCategories', 'pastEvents'));
    }

    public function thisWeekend()
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


        $saturday = now()->startOfWeek()->addDays(5)->toDateString();
        $sunday = now()->startOfWeek()->addDays(6)->toDateString();

        // Filtrer les événements de ce week-end
        $events = Event::whereBetween('date', [$saturday, $sunday])
            ->where('status', 'Public')
            ->paginate(6);


        return view('welcome', compact('events', 'categories', 'allCategories', 'pastEvents'));
    }

    public function nextWeek()
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


        $monday = now()->startOfWeek()->addDays(7)->toDateString();
        $sunday = now()->startOfWeek()->addDays(13)->toDateString();

        // Filtrer les événements de la semaine prochaine
        $events = Event::whereBetween('date', [$monday, $sunday])
            ->where('status', 'Public')
            ->paginate(6);


        return view('welcome', compact('events', 'categories', 'allCategories', 'pastEvents'));
    }

    public function nextWeekend()
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


        $saturday = now()->startOfWeek()->addDays(6)->addWeek()->toDateString();
        $sunday = now()->startOfWeek()->addDays(7)->addWeek()->toDateString();

        // Filtrer les événements du prochain week-end
        $events = Event::whereBetween('date', [$saturday, $sunday])
            ->where('status', 'Public')
            ->paginate(6);


        return view('welcome', compact('events', 'categories', 'allCategories', 'pastEvents'));
    }

    public function filterByCategory($categoryName)
    {
        $categories = Category::limit(5)->get();
        $allCategories = Category::all();
        $LatestEvents = Event::limit(5)->where('status', 'Public')->get();

        // Sélectionner les événements passés de la catégorie spécifiée
        $category = Category::where('name', $categoryName)->firstOrFail();
        $pastEvents = Event::where('category', $category->id)
            ->where('status', 'Public')
            ->where('nbr_place', '>', 0)
            ->where('date', '<', now()) // Sélectionner les événements passés
            ->paginate(6);

        // Sélectionner les événements à venir de la catégorie spécifiée
        $events = Event::where('category', $category->id)
            ->where('status', 'Public')
            ->where('nbr_place', '>', 0)
            ->where('date', '>', now()) // Sélectionner les événements à venir
            ->paginate(6);

        return view('events', compact('events', 'categories', 'LatestEvents', 'allCategories', 'pastEvents'));
    }

    public function search(Request $request)
    {
        $title = $request->input('title');

        $events = Event::where('title', 'like', '%' . $title . '%')
            ->where('status', 'Public')
            ->where('date', '>', now())
            ->paginate(6);
        $categories = Category::limit(5)->get();
        $allCategories = Category::all();
        $LatestEvents = Event::limit(5)->where('status', 'Public')->get();

        $pastEvents = Event::where('title', 'like', '%' . $title . '%')
            ->where('status', 'Public')
            ->where('nbr_place', '>', 0)
            ->where('date', '<', now())
            ->paginate(6);

        return view('search-results', compact('events', 'categories', 'allCategories', 'LatestEvents', 'pastEvents'));
    }

}
