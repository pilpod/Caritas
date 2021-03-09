<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::where('role_id', '=', 1)->firstOrFail();
        $profile = $user->profile;
        return view('welcome', ['profile' => $profile]);
    }
    public function setLanguage($language)
    {
        Session::put('language', $language);
        App::setlocale($language);
        return redirect()->back();
    }
}
