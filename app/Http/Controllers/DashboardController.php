<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Contracts\Validation\Validator;
use App\Http\Requests\StoreProfileRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    /**
     *
     * @param  \App\Http\Requests\StoreProfileRequest
     * @return Illuminate\Http\Response
     */

    private object $profile;
    
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

    public function editLogo()
    {
        $profile = auth()->user()->profile;
        return view('Backoffice.logoEdit', ['profile' => $profile]);
    }

    public function updateLogo(Request $request, $id)
    {
        $profile = Profile::find($id);

        $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        
        DB::beginTransaction();
        
        try {
            $profile->logo = $request->logo->getClientOriginalName();
            DB::table('profiles')->where('id', $profile->id)->update(['logo' => $request->logo->getClientOriginalName()]);
            $request->logo->storeAs('public/logo', $request->logo->getClientOriginalName());
            DB::commit();
            return redirect(route('dashboard'));
        }
        catch (\Exception $ex) {
            DB::rollback();
        }
        
    }

    public function deleteLogo($id)
    {
        $profile = Profile::find($id);

        DB::beginTransaction();

        try {
            DB::table('profiles')->where('id', $profile->id)->update(['logo' => null]);
            Storage::delete([ $profile->logo ]);
            DB::commit();
            return redirect(route('dashboard'));
        }
        catch (\Exception $ex) {
            DB::rollback();
        }
    }
}
