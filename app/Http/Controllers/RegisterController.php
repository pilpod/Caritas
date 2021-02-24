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
        $usersQuantity = $this->users->count();
        if(!$usersQuantity) {
            return view('Auth.register');
        }
        return abort(404);
    }

    public function store(Request $request) {
        
        $data = [
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password'],
            'password_confirmation' => $request['password_confirmation']
        ];
        
        $usersQuantity = $this->users->count();
        if(!$usersQuantity) {
            try {
                $createNewUser= new CreateNewUser;
                $createNewUser->create($data);
                return redirect(route('dashboard'));
            }
            catch (Exception $ex) {
                abort(418, $ex);
            }

        } else {
            abort(418, 'Operación no permitida');
        }

    }
}
