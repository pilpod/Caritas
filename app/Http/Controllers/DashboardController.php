<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostProfileRequest;
use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Contracts\Validation\Validator;

class DashboardController extends Controller
{

    /**
     * @param  \App\Http\Requests\PostProfileRequest  $request
     * @return Illuminate\Http\Response
     */

    public function index()
    {
        $user = auth()->user();
        return view('Backoffice.dashboard', ['user' => $user]);
    }

    public function create()
    {
        return view('Backoffice.profileCreate');
    }

    public function store(PostProfileRequest $request)
    {

        $request->validated();

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
