<?php

namespace App\Http\Controllers;

use Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;

class InstagramController extends Controller
{
    public function redirectToInstagramProvider() {
        return Socialite::with('instagram')->scopes([
            "public_content"
        ])->redirect();
    }

    public function handleProviderInstagramCallback() {
        $insta = Socialite::driver('instagram')->user();
        $details = [
            "access_token" => $insta->token
        ];

        if (Auth::user()->instagram) {
            Auth::user()->instagram()->update($details);
        } else {
            Auth::user()->instagram()->create($details);
        }

        return redirect('/');
    }
}
