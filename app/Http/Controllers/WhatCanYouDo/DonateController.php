<?php

namespace App\Http\Controllers\WhatCanYouDo;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\DB;

use App\Models\ContentSection;
use App\Models\CatalanData;
use App\Models\SpanishData;
use App\Models\Language;
use App\Http\Controllers\Controller;
use App\Http\Requests\Donate\DonateStoreRequest;
use App\Http\Requests\Donate\DonateUpdateRequest;
use App\Http\Requests\Image\ImageRequest;

class DonateController extends Controller
{
    /**
     *
     * @param  \App\Http\Requests\Donate\DonateStoreRequest
     * @param  \App\Http\Requests\Donate\DonateUpdateRequest
     * @param  \App\Http\Requests\Image\ImageRequest
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        $section = ContentSection::where('section_name', '=', 'donate')->first();
        $catData = CatalanData::where('title_content', '=', 'donate-main-text')->first();
        $spanishData = SpanishData::where('title_content', '=', 'donate-main-text')->first();
        return view('Backoffice.donate', [
            'catData' => $catData,
            'spanishData' => $spanishData,
            'section' => $section,
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
        return redirect( route('donate'), 302);
    }

    public function createDonateMainTextCat($text) {
        $catCode = Language::getId('cat');
        $section = ContentSection::getId('donate');

        CatalanData::create([
            'title_content' => 'donate-main-text',
            'text_content' => $text,
            'lang_id' => $catCode,
            'section_id' => $section,

        ]);
    }

    public function createDonateMainTextEs($text) {
        $esCode = Language::getId('es');
        $section = ContentSection::getId('donate');

        SpanishData::create([
            'title_content' => 'donate-main-text',
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

        return redirect( route('donate'), 302 );
    }

    public function updateCat($data, $id) 
    {
       
        $catData = CatalanData::where('section_id', '=', $id)->first();;

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
}
