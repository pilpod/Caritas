<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostProfileRequest;
use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Contracts\Validation\Validator;
use App\Http\Requests\StoreProfileRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
<<<<<<< HEAD

    /**
     * @param  \App\Http\Requests\PostProfileRequest  $request
     * @return Illuminate\Http\Response
     */

=======
    /**
     *
     * @param  \App\Http\Requests\StoreProfileRequest
     * @return Illuminate\Http\Response
     */
>>>>>>> feature/update-data-connection
    public function index()
    {
        $user = auth()->user();
        
        $profile = User::find($user->id)->profile;
        return view('Backoffice.dashboard', [
            'user' => $user,
            'profile' => $profile
        ]);
    }

    public function create()
    {
        $profiles = Profile::all();
        $profileCount = $profiles->count();
        if (!$profileCount) {
            return view('Backoffice.profileCreate');
        }
        abort(404, 'page disabled');
    }

<<<<<<< HEAD
    public function store(PostProfileRequest $request)
    {

        $request->validated();
=======

    public function store(StoreProfileRequest $request)
    {

        $request->validated();
        $user = auth()->user();
        $user = User::find(auth()->user()->id);
        if(!$user->profile){
            $profile = Profile::create([
                'name' => $request->name,
                'direction' => $request->direction,
                'city' => $request->city,
                'phone' => $request->phone,
                'bankAccount' => $request->bankAccount,
                'bizum' => $request->bizum,
                'user_id' => $user->id
            ]);
            $profile->saveOrFail();
            $profile = $user->profile;
    
            return redirect(route('dashboard'));
        }
        return abort(404, 'Profile already created');
    }
>>>>>>> feature/update-data-connection

    public function edit($id)
    {
        $profile = Profile::find($id);
        return view('Backoffice.profileEdit', ['profile' => $profile]);
    }

    public function update(StoreProfileRequest $request, $id)
    {
        $request->validated();
        $profile = Profile::find($id);
        $profile->update([
            'name' => $request->name,
            'direction' => $request->direction,
            'city' => $request->city,
            'phone' => $request->phone,
            'bankAccount' => $request->bankAccount,
            'bizum' => $request->bizum,
        ]);

        $user = auth()->user();
        return view('Backoffice.dashboard', [
            'user' => $user,
            'profile' => $profile
        ]);
    }
}
