<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User; // Assurez-vous d'importer le modèle User si vous ne l'avez pas déjà fait

class FacebookController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        $facebookUser = Socialite::driver('facebook')->user();

        $user = User::where('facebook_id', $facebookUser->getId())->first();

        if (!$user) {
            $userRole = Role::firstOrCreate(['role' => 'client']);

            $user = User::create([
                'name' => $facebookUser->getName(),
                'email' => $facebookUser->getEmail(),
                'facebook_id' => $facebookUser->getId(),
                'role' => $userRole->id
            ]);
        }

        auth()->login($user);

        return redirect('/dashboard');
    }
}
