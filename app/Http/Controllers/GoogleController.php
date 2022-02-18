<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Models\GoogleUser;

class GoogleController extends Controller
{
    public function redirectToGoogle() {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogle(){
        $user = Socialite::driver('google')->user();

       GoogleUser::create([
            "name" => $user->name,
            "email" => $user->email,
            "picture" => $user->user['picture'],
            "given_name" => $user->user['given_name'],
            "family_name" => $user->user['family_name'],
            "email_verified" => $user->user['email_verified'],
            "locale" => $user->user['locale'],
       ]);
    }
}
