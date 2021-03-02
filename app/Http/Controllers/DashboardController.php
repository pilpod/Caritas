<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Contracts\Validation\Validator;
use App\Http\Requests\StoreProfileRequest;

class DashboardController extends Controller
{
    /**
     *
     * @param  \App\Http\Requests\StoreProfileRequest
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $profile = $user->profile();
        return view('Backoffice.dashboard', [
            'user' => $user,
            'profile' => $profile
        ]);
    }

    public function create()
    {
        $profileCount = Profile::all();
        if ($profileCount->isEmpty()) {
            return view('Backoffice.profileCreate');
        }
        abort(404, 'page disabled');
    }


    public function store(StoreProfileRequest $request)
    {

        $request->validated();

        $user = auth()->user();

        $profile = Profile::create([
            'direction' => $request->direction,
            'city' => $request->city,
            'phone' => $request->phone,
            'bankAccount' => $request->bankAccount,
            'bizum' => $request->bizum,
            'user_id' => $user->id
        ]);
        $profile->saveOrFail();

        return view('Backoffice.dashboard', [
            'user' => $user,
            'profile' => $profile
        ]);
    }
}
