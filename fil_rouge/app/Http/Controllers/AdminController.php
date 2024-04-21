<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function Profile()
    {
        $totalEvents = Event::where('status', 'Public')->count();

        $totalConfirmationRequests =  Event::where('status', 'En attente')->count();

        $totalUsers = User::where('deleted', '0')->count();

        return view('admin.profile', [
            'totalEvents' => $totalEvents,
            'totalConfirmationRequests' => $totalConfirmationRequests,
            'totalUsers' => $totalUsers,
        ]);
    }

}
