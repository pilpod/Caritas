<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\CreateNewUser;
use Illuminate\Http\Request;
use App\Models\User;
use Exception;

class RegisterController extends Controller
{
    protected $users;

    public function __construct()
    {
        $this->users = User::all();
    }
    public function index()
    {
        $userCount = $this->users->count();
        if (!$userCount) {
            return view('Auth.register');
        }
        abort(404, 'page disabled');
    }

    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'password_confirmation' => $request->password_confirmation,
        ];

        $userCount = $this->users->count();
        if(!$userCount) {
            try {
                $createNewUser = new CreateNewUser;
                $createNewUser->create($data);
                return redirect(route('dashboard'));
            }
            catch (Exception $ex){
                abort(400, 'User not registered, please try again');
            }
        }
    }
}
