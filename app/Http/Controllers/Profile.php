<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class Profile extends Controller
{
    //
    public function showProfile () {
        $user = Auth::user();
        return view('profile.show', ['user' => $user]);
    }
    //
    public function settings () {
        $user = Auth::user();
        return view('profile.settings', ['user' => $user]);
    }
}
