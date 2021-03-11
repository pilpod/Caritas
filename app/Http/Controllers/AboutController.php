<?php

namespace App\Http\Controllers;

use App\Models\CatalanData;
use App\Models\ContentSection;
use App\Models\SpanishData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Language;
use phpDocumentor\Reflection\Types\This;

class AboutController extends Controller
{
    public function index()
    {
        $catData = CatalanData::where('title_content', '=', 'main_text');
        $spanishData = SpanishData::where('title_content', '=', 'main_text');
        return view('Backoffice.about', [
            'catdata' => $catData,
            'spanishData' => $spanishData,
        ]);
    }

    public function store(Request $request) 
    {
        $catText = $request->catalan_about_text;
        $esText = $request->spanish_about_text;
        
        DB::transaction(function () use ($catText, $esText) {
            $this->createAboutMainTextCat($catText);
            $this->createAboutMainTextEs($esText);
            
        });

    }

    public function update(Request $request, $id)
    {
        $language = Language::find($request->lang_id);
        
        if($language->language_code === 'cat'){
            $this->updateCat($request, $id);
            
        }
        if($language->language_code === 'es'){
            $this->updateSpanish($request, $id);
        }
    }

    public function updateCat($data, $id) 
    {
       
        $catData = CatalanData::find($id);

        $catData->update([
            'language_id' => $catData->language_id,
            'section_id' => $catData->section_id,
            'title_content' => $data->title_content,
            'text_content' => $data->text_content,
        ]);
    }

    public function updateSpanish($data, $id) 
    {
       
        $spanishData = SpanishData::find($id);
        $spanishData->update([
            'language_id' => $spanishData->language_id,
            'section_id' => $spanishData->section_id,
            'title_content' => $data->title_content,
            'text_content' => $data->text_content,
        ]);
    }

    public function createAboutMainTextCat($text)
    {
        // $catCode = DB::table('languages')->where('language_code', 'cat')->get();
        $catCode = Language::where('language_code', '=', 'cat')->get();
        dd($catCode->id);
        // $catCode[0]->id;
        $section = ContentSection::where('section_name', '=', 'about')->get();
        CatalanData::create([
            'title_content' => 'about-main-text',
            'text_content' => $text,
            'lang_id' => $catCode->id,
            'section_id' => $section->id
            ]);

    }

    public function createAboutMainTextEs($text)
    {
        $esCode = Language::where('language_code', '=', 'es')->get();
        $section = ContentSection::where('section_name', '=', 'about')->get();
        SpanishData::create([
            'title_content' => 'about-main-text',
            'text_content' => $text,
            'lang_id' => $esCode->id,
            'section_id' => $section->id
        ]);
    }
}
