<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

        // Fetching events
        $events = Event::where('status', 'Public')
            ->where('date', '>=', now()->toDateString())
            ->paginate(6);
        $pastEvents = Event::where('status', 'Public')
            ->where(function ($query) {
                $query->where('nbr_place', 0)
                    ->orWhere('date', '<', now()->toDateString());
            })
            ->paginate(6);

        // Fetching country flag emojis from CDN
        $flagsData = json_decode(file_get_contents('https://cdn.jsdelivr.net/npm/country-flag-emoji-json@2.0.0/dist/index.json'), true);
        $flags = [];
        $keys = array_rand($flagsData, 18);
        foreach ($keys as $key) {
            $flags[$key] = $flagsData[$key];
        }
        return view('welcome', compact('events', 'categories', 'allCategories', 'pastEvents', 'flags', 'flagsData'));
    }

    public function tomorrow()
    {
        $categories = Category::limit(5)->get();
        $allCategories = Category::all();

        $events = Event::where('status', 'Public')
            ->where('date', '>', now()->toDateString())
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

        $flagsData = json_decode(file_get_contents('https://cdn.jsdelivr.net/npm/country-flag-emoji-json@2.0.0/dist/index.json'), true);
        $flags = [];
        $keys = array_rand($flagsData, 18);
        foreach ($keys as $key) {
            $flags[$key] = $flagsData[$key];
        }

        return view('events', compact('events', 'categories', 'allCategories', 'pastEvents', 'flags', 'flagsData'));
    }

    public function thisWeek()
    {
        $categories = Category::limit(5)->get();
        $allCategories = Category::all();

        $tomorrow = Carbon::tomorrow()->toDateString();

        $events = Event::whereDate('date', $tomorrow)
            ->where('status', 'Public')
            ->paginate(6);

        return view('events', compact('events', 'categories', 'allCategories'));
    }


    public function thisMonth()
    {
        $categories = Category::limit(5)->get();
        $allCategories = Category::all();

        // Récupérer le premier et le dernier jour du mois en cours
        $startOfMonth = now()->startOfMonth();
        $endOfMonth = now()->endOfMonth();

        // Filtrer les événements de ce mois
        $events = Event::whereBetween('date', [$startOfMonth, $endOfMonth])
            ->where('status', 'Public')
            ->paginate(6);

        // Filtrer les événements passés du mois en cours
        $pastEvents = Event::where('status', 'Public')
            ->where(function ($query) use ($startOfMonth) {
                $query->where('nbr_place', 0)
                    ->orWhere('date', '<', $startOfMonth);
            })
            ->paginate(6);

        return view('events', compact('events', 'categories', 'allCategories', 'pastEvents'));
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


        return view('events', compact('events', 'categories', 'allCategories', 'pastEvents'));
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


        return view('events', compact('events', 'categories', 'allCategories', 'pastEvents'));
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


        return view('events', compact('events', 'categories', 'allCategories', 'pastEvents'));
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
        // Fetching country flag emojis from CDN
        $flagsData = json_decode(file_get_contents('https://cdn.jsdelivr.net/npm/country-flag-emoji-json@2.0.0/dist/index.json'), true);
        $flags = [];
        $keys = array_rand($flagsData, 18);
        foreach ($keys as $key) {
            $flags[$key] = $flagsData[$key];
        }

        return view('events', compact('events', 'categories', 'LatestEvents', 'allCategories', 'pastEvents', 'flags', 'flagsData'));
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $events = Event::where('status', 'Public')
            ->where('date', '>', now())
            ->where(function ($query) use ($searchTerm) {
                $query->where('title', 'like', '%' . $searchTerm . '%')
                    ->orWhere('country', 'like', '%' . $searchTerm . '%')
                    ->orWhere('city', 'like', '%' . $searchTerm . '%')//
                ;
            })
            ->paginate(6);
        $categories = Category::limit(5)->get();
        $allCategories = Category::all();
        $LatestEvents = Event::limit(5)->where('status', 'Public')->get();

        $pastEvents = Event::where('status', 'Public')
            ->where('nbr_place', '>', 0)
            ->where('nbr_place', '>', 0)
            ->where(function ($query) use ($searchTerm) {
                $query->where('title', 'like', '%' . $searchTerm . '%')
                    ->orWhere('country', 'like', '%' . $searchTerm . '%')
                    ->orWhere('city', 'like', '%' . $searchTerm . '%')//
                ;
            })
            ->paginate(6);

        return view('search-results', compact('events', 'categories', 'allCategories', 'LatestEvents', 'pastEvents'));
    }

    public function filterByRabat()
    {
        $categories = Category::limit(5)->get();
        $allCategories = Category::all();
        $LatestEvents = Event::limit(5)->where('status', 'Public')->get();

        $events = Event::where('city', 'Rabat')
            ->where('status', 'Public')
            ->where('nbr_place', '>', 0)
            ->where('date', '>', now())
            ->paginate(6);

        $pastEvents = Event::where('city', 'Rabat')
            ->where('status', 'Public')
            ->where('nbr_place', '>', 0)
            ->where('date', '<', now())
            ->paginate(6);

        $flagsData = json_decode(file_get_contents('https://cdn.jsdelivr.net/npm/country-flag-emoji-json@2.0.0/dist/index.json'), true);
        $flags = [];
        $keys = array_rand($flagsData, 18);
        foreach ($keys as $key) {
            $flags[$key] = $flagsData[$key];
        }


        return view('events', compact('events', 'categories', 'LatestEvents', 'allCategories', 'pastEvents', 'flags', 'flagsData'));
    }

    public function filterByCasablanca()
    {
        $categories = Category::limit(5)->get();
        $allCategories = Category::all();
        $LatestEvents = Event::limit(5)->where('status', 'Public')->get();

        $events = Event::where('city', 'Casablanca')
            ->where('status', 'Public')
            ->where('nbr_place', '>', 0)
            ->where('date', '>', now())
            ->paginate(6);

        $pastEvents = Event::where('city', 'Casablanca')
            ->where('status', 'Public')
            ->where('nbr_place', '>', 0)
            ->where('date', '<', now())
            ->paginate(6);

        $flagsData = json_decode(file_get_contents('https://cdn.jsdelivr.net/npm/country-flag-emoji-json@2.0.0/dist/index.json'), true);
        $flags = [];
        $keys = array_rand($flagsData, 18);
        foreach ($keys as $key) {
            $flags[$key] = $flagsData[$key];
        }


        return view('events', compact('events', 'categories', 'LatestEvents', 'allCategories', 'pastEvents', 'flags', 'flagsData'));
    }

    public function filterByMarrakech()
    {
        $categories = Category::limit(5)->get();
        $allCategories = Category::all();
        $LatestEvents = Event::limit(5)->where('status', 'Public')->get();

        $events = Event::where('city', 'Marrakech')
            ->where('status', 'Public')
            ->where('nbr_place', '>', 0)
            ->where('date', '>', now())
            ->paginate(6);

        $pastEvents = Event::where('city', 'Marrakech')
            ->where('status', 'Public')
            ->where('nbr_place', '>', 0)
            ->where('date', '<', now())
            ->paginate(6);

        $flagsData = json_decode(file_get_contents('https://cdn.jsdelivr.net/npm/country-flag-emoji-json@2.0.0/dist/index.json'), true);
        $flags = [];
        $keys = array_rand($flagsData, 18);
        foreach ($keys as $key) {
            $flags[$key] = $flagsData[$key];
        }

        return view('events', compact('events', 'categories', 'LatestEvents', 'allCategories', 'pastEvents', 'flags', 'flagsData'));
    }

    public function filterByTanger()
    {
        $categories = Category::limit(5)->get();
        $allCategories = Category::all();
        $LatestEvents = Event::limit(5)->where('status', 'Public')->get();

        $events = Event::where('city', 'Tanger')
            ->where('status', 'Public')
            ->where('nbr_place', '>', 0)
            ->where('date', '>', now())
            ->paginate(6);

        $pastEvents = Event::where('city', 'Tanger')
            ->where('status', 'Public')
            ->where('nbr_place', '>', 0)
            ->where('date', '<', now())
            ->paginate(6);

        $flagsData = json_decode(file_get_contents('https://cdn.jsdelivr.net/npm/country-flag-emoji-json@2.0.0/dist/index.json'), true);
        $flags = [];
        $keys = array_rand($flagsData, 18);
        foreach ($keys as $key) {
            $flags[$key] = $flagsData[$key];
        }

        return view('events', compact('events', 'categories', 'LatestEvents', 'allCategories', 'pastEvents', 'flags', 'flagsData'));
    }

    public function filterByCountries($countryName)
    {
        $categories = Category::limit(5)->get();
        $allCategories = Category::all();
        $LatestEvents = Event::limit(5)->where('status', 'Public')->get();

        $pastEvents = Event::where('country', $countryName)
                ->where('status', 'Public')
                ->where('nbr_place', '>', 0)
                ->where('date', '<', now())
            ->paginate(6);


        $events = Event::where('country', $countryName)
            ->where('status', 'Public')
            ->where('nbr_place', '>', 0)
            ->where('date', '>', now())
            ->paginate(6);

        $flagsData = json_decode(file_get_contents('https://cdn.jsdelivr.net/npm/country-flag-emoji-json@2.0.0/dist/index.json'), true);
        $flags = [];
        $keys = array_rand($flagsData, 18);
        foreach ($keys as $key) {
            $flags[$key] = $flagsData[$key];
        }
        return view('events', compact('events', 'categories', 'LatestEvents', 'allCategories', 'pastEvents', 'flags', 'flagsData'));
    }

}
