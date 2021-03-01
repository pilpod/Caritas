<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('Backoffice.dashboard', ['user' => $user]);
    }

    public function create()
    {
        return view('Backoffice.profileCreate');
    }
}
