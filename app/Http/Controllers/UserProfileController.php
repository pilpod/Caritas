<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function edit()
    {
        $user = auth()->user();
        return view('Auth.updateUserProfile');
    }
}
