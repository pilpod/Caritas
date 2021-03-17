<?php

namespace App\Http\Controllers;

use App\Models\CatalanData;
use App\Models\ContentSection;
use App\Models\Profile;
use App\Models\SpanishData;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function index()
    {
        $aboutSection = ContentSection::where('section_name', '=', 'about')->first();
        $aboutCat = CatalanData::where('section_id', '=', $aboutSection->id)->first();
        $aboutEs =  SpanishData::where('section_id', '=', $aboutSection->id)->first();

        $donateSection = ContentSection::where('section_name', '=', 'donate')->first();
        $donateCat = CatalanData::where('section_id', '=', $donateSection->id)->first();
        $donateEs =  SpanishData::where('section_id', '=', $donateSection->id)->first();


        // dd($aboutImg);
        $user = User::where('role_id', '=', 1)->firstOrFail();
        $profile = $user->profile;
        return view('landing', 
        [
            'profile' => $profile, 
            
            'aboutImg' => $aboutSection->section_image, 
            'aboutCat' => $aboutCat->text_content,
            'aboutEs' => $aboutEs->text_content,

            'donateImg' => $donateSection->section_image, 
            'donateCat' => $donateCat->text_content,
            'donateEs' => $donateEs->text_content,
        ]);
    }

    public function setLanguage($language)
    {
        Session::put('language', $language);
        App::setlocale($language);
        return redirect()->back();
    }
}
