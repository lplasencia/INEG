<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Profile;
use App\User;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $profile = Profile::findOrFail($user->id);
        return view('profile.index',compact('profile'));
    }
}
