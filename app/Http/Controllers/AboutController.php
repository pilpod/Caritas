<?php

namespace App\Http\Controllers;

use App\Models\ContentSection;
use App\Models\SpanishData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Language;

class AboutController extends Controller
{
    public function index()
    {
        return view('Backoffice.about');
    }

    public function store(Request $request)
    {
        $test = DB::select('select * from languages' );
        dd($test);
        $contentSection = ContentSection::find(1);
        dd($contentSection);
       SpanishData::create([
           'title_content' => $request->content_title_es,
           'text_content' => $request->content_title_es,
           'lang_id' => 1,
           'section_id' => 1
       ]);

       SpanishData::create([
        'title_content' => $request->content_title_es,
        'text_content' => $request->content_title_es,
        'lang_id' => 1,
        'section_id' => 1
    ]);


        
    }

}
