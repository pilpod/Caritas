<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    protected $users;

    public function __construct()
    {
        $this->users = User::all();
    }
    public function index() {

        $userCount = $this->users->count();
        if(!$userCount){
            return view('Auth.register');
        }
        return abort(404, 'page disabled');
    }
}
