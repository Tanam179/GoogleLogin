<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;


class GoogleController extends Controller
{
    public function redirectToGoogle() {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogle(){
        $user = Socialite::driver('google')->user();
        print_r($user);
    }
}
