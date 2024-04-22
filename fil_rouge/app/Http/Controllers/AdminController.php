<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\Role;
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

        $totalConfirmationRequests = Event::where('status', 'En attente')->count();

        $totalUsers = User::where('deleted', '0')->count();

        return view('admin.profile', [
            'totalEvents' => $totalEvents,
            'totalConfirmationRequests' => $totalConfirmationRequests,
            'totalUsers' => $totalUsers,
        ]);
    }

    public function manage_profile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . auth()->user()->id,
            'picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = auth()->user();
        $user->name = $request->name;
        $user->email = $request->email;

        // Gérer l'image de profil si elle est téléchargée
        $fileName = time() . $request->file('picture')->getClientOriginalName();
        $path = $request->file('picture')->storeAs('picture', $fileName, 'public');
        $picturePath = Storage::url($path);

        $picture["picture"] = $picturePath;

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'picture' => $picturePath,
        ]);
//        $user->save();

        return redirect()->back()->with('success', 'Your profile has been updated successfully!');
    }

    public function statistiques()
    {
        $totalEvents = Event::where('status', 'Public')->count();

        $totalCategories = Category::count();

        $totalUsers = User::where('deleted', '0')->count();

        $roles = Role::all();
        $LatestUsers = User::limit(4)->get();
        $LatestEvents = Event::limit(5)->get();
        $LatestCategories = Category::limit(5)->get();

        $events = Event::count();
        $categories = Category::count();
        $users = User::count();

        return view('admin.dashboard', [
            'totalEvents' => $totalEvents,
            'totalCategories' => $totalCategories,
            'totalUsers' => $totalUsers,
            'LatestUsers' => $LatestUsers,
            'roles' => $roles,
            'LatestEvents' => $LatestEvents,
            'LatestCategories' => $LatestCategories,
            'events' => $events,
            'categories' => $categories,
            'users' => $users
        ]);
    }

}
