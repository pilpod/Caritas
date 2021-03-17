<?php

namespace App\Http\Controllers\WhatCanYouDo;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\ContentSection;
use App\Models\CatalanData;
use App\Models\SpanishData;
use App\Http\Requests\Volunteer\VolunteerStoreRequest;
use App\Http\Requests\Volunteer\VolunteerUpdateRequest;
use App\Models\Language;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use App\Http\Requests\Image\ImageRequest;

class VolunteerController extends Controller
{

     /**
     *
     * @param  \App\Http\Requests\Donate\VolunteerStoreRequest
     * @param  \App\Http\Requests\Volunteer\VolunterUpdateRequest
     * @param  \App\Http\Requests\Image\ImageRequest
     * @return Illuminate\Http\Response
     */

    public function index() 
    {
        $section = ContentSection::where('section_name', '=', 'volunteer')->first();
        $catData = CatalanData::where('title_content', '=', 'volunteer-main-text')->first();
        $spanishData = SpanishData::where('title_content', '=', 'volunteer-main-text')->first();

        return view('Backoffice.volunteer', [
            'catData' => $catData,
            'spanishData' => $spanishData,
            'section' => $section,
        ]);

    }

    public function store(VolunteerStoreRequest $request)
    {
        $request->validated();
        $catText = $request->catalan_volunteer_text;
        $esText = $request->spanish_volunteer_text;

        DB::transaction(function () use ($catText, $esText) {
            $this->createVolunteerMainTextCat($catText);
            $this->createVolunteerMainTextEs($esText);
        });
        return redirect( route('volunteer'), 302);
    }

    public function createVolunteerMainTextCat($text)
    {
        $catCode = Language::getId('cat');
        $section = ContentSection::getId('volunteer');
        CatalanData::create([
            'title_content' => 'volunteer-main-text',
            'text_content' => $text,
            'lang_id' => $catCode,
            'section_id' => $section
        ]);
    }

    public function createVolunteerMainTextEs($text)
    {
        $esCode = Language::getId('es');
        $section = ContentSection::getId('volunteer');
        SpanishData::create([
            'title_content' => 'volunteer-main-text',
            'text_content' => $text,
            'lang_id' => $esCode,
            'section_id' => $section
        ]);
    }

    public function update(VolunteerUpdateRequest $request, $id)
    {
        $request->validated();
        $language = Language::find($request->lang_id);
        
        if($language->language_code === 'cat'){
            $this->updateCat($request, $id);
            
        }
        if($language->language_code === 'es'){
            $this->updateSpanish($request, $id);
        }

        return redirect( route('volunteer'), 302 );
    }

    public function updateCat($data, $id) 
    {
       
        $catData = CatalanData::where('section_id', '=', $id)->first();

        $catData->update([
            'lang_id' => $catData->lang_id,
            'section_id' => $catData->section_id,
            'title_content' => $catData->title_content,
            'text_content' => $data->text_content,
        ]);
    }

    public function updateSpanish($data, $id) 
    {
       
        $spanishData = SpanishData::where('section_id', '=', $id)->first();
        $spanishData->update([
            'lang_id' => $spanishData->lang_id,
            'section_id' => $spanishData->section_id,
            'title_content' => $spanishData->title_content,
            'text_content' => $data->text_content,
        ]);
    }

    public function UpdateImage(ImageRequest $request, $id)
    {
        
        $request->validated();
        $section = ContentSection::find($id);
        DB::beginTransaction();
        try {
            $section->update([
                'section_image' => $request->section_image->getClientOriginalName()
            ]);
            $request->section_image->storeAs('public/section',  $request->section_image->getClientOriginalName());
            DB::commit();
            return back();
        }
        catch (\Exception $ex){
            DB::rollBack();
        }
    }

}
