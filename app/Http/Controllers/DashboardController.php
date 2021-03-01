<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Contracts\Validation\Validator;

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

    public function store(Request $request)
    {

        
        $this->validate($request, [
            'direction' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:9'],
            'bankAccount' => ['required', 'string', 'max:24'],
            'bizum' => ['required', 'string', 'max:13'],
        ]);

        $userId = auth()->user()->id;
        
        $profile = Profile::create([
            'direction' => $request->direction,
            'city' => $request->city,
            'phone' => $request->phone,
            'bankAccount' => $request->bankAccount,
            'bizum' => $request->bizum,
            'user_id' => $userId
        ]);
        $profile->saveOrFail();

        return redirect(route('dashboard'), 201);
    }
}
