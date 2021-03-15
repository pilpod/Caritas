<?php

namespace App\Http\Controllers\WhatCanYouDo;

use Illuminate\Http\Request;
use App\Models\ContentSection;
use App\Models\CatalanData;
use App\Models\SpanishData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Donate\DonateStoreRequest;
use App\Models\Language;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Donate\DonateUpdateRequest;
use App\Http\Requests\Image\ImageRequest;

class DonateController extends Controller
{
    /**
     *
     * @param  \App\Http\Requests\Donate\DonateStoreRequest
     * @param  \App\Http\Requests\About\DonateUpdateRequest
     * @param  \App\Http\Requests\Image\ImageRequest
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        $sectionId = ContentSection::getId('donate');
        $catData = CatalanData::where('title_content', '=', 'main_text');
        $spanishData = SpanishData::where('title_content', '=', 'main_text');
        return view('Backoffice.donate', [
            'catdata' => $catData,
            'spanishData' => $spanishData,
            'sectionId' => $sectionId,
        ]);
    }

    public function store(DonateStoreRequest $request)
    {
        $request->validated();

        $catText = $request->catalan_donate_text;
        $esText = $request->spanish_donate_text;

        DB::transaction(function () use ($catText, $esText) {
            $this->createDonateMainTextCat($catText);
            $this->createDonateMainTextEs($esText);
        });

    }

    public function createDonateMainTextCat($text) {
        $catCode = Language::getId('cat');
        $section = ContentSection::getId('donate');

        CatalanData::create([
            'title_content' => 'donate_main_text',
            'text_content' => $text,
            'lang_id' => $catCode,
            'section_id' => $section,

        ]);
    }

    public function createDonateMainTextEs($text) {
        $esCode = Language::getId('es');
        $section = ContentSection::getId('donate');

        CatalanData::create([
            'title_content' => 'donate_main_text',
            'text_content' => $text,
            'lang_id' => $esCode,
            'section_id' => $section,

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

    public function update(DonateUpdateRequest $request, $id)
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
