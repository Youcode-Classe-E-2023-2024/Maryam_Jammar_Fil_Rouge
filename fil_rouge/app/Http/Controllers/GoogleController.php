<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {
//        try {
        $guzzleClient = new Client(['verify' => false]);

        // Utiliser le client Guzzle pour effectuer la demande avec Socialite
        $google_user = Socialite::driver('google')->setHttpClient($guzzleClient)->user();

        //check if this user is in our DB
        $user = User::where('google_id', $google_user->getId())->first();

        if (!$user) {
            $userRole = Role::firstOrCreate(['role' => 'client']);

            $new_user = User::create([
                'name' => $google_user->getName(),
                'email' => $google_user->getEmail(),
                'google_id' => $google_user->getId(),
                'role' => $userRole->id
            ]);
            Auth::login($new_user);
            return redirect('/dashboard')->with('success', 'Login successful!');
        } else {
            Auth::login($user);
            return redirect('/dashboard')->with('success', 'Login successful!');
        }

//        }catch (\Throwable $th){
//            logger('Google authentication error: ' . $th->getMessage(), ['exception' => $th]);
//            dd('something is wrong', $th);

//        }
    }

}
