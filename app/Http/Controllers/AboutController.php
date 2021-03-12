<?php

namespace App\Http\Controllers;

use App\Models\CatalanData;
use App\Models\ContentSection;
use App\Models\SpanishData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Language;
use App\Http\Requests\About\AboutStoreRequest;
use App\Http\Requests\About\AboutUpdateRequest;

class AboutController extends Controller
{
    
    /**
     *
     * @param  \App\Http\Requests\About\AboutStoreRequest
     * @param  \App\Http\Requests\About\AboutUpdateRequest
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        $catData = CatalanData::where('title_content', '=', 'main_text');
        $spanishData = SpanishData::where('title_content', '=', 'main_text');
        return view('Backoffice.about', [
            'catdata' => $catData,
            'spanishData' => $spanishData,
        ]);
    }

    public function store(AboutStoreRequest $request) 
    {
        $request->validated();
        $catText = $request->catalan_about_text;
        $esText = $request->spanish_about_text;
        
        DB::transaction(function () use ($catText, $esText) {
            $this->createAboutMainTextCat($catText);
            $this->createAboutMainTextEs($esText);
            
        });

    }

    public function createAboutMainTextCat($text)
    {
        $catCode = Language::getId('cat');
        $section = ContentSection::getId('about');
        CatalanData::create([
            'title_content' => 'about-main-text',
            'text_content' => $text,
            'lang_id' => $catCode,
            'section_id' => $section
            ]);
    }

    public function createAboutMainTextEs($text)
    {
        $esCode = Language::getId('cat');
        $section = ContentSection::getId('about');
        SpanishData::create([
            'title_content' => 'about-main-text',
            'text_content' => $text,
            'lang_id' => $esCode,
            'section_id' => $section
        ]);
    }

    public function update(AboutUpdateRequest $request, $id)
    {
        $request->validated();
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

  
}
