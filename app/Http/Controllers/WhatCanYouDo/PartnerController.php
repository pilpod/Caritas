<?php

namespace App\Http\Controllers\WhatCanYouDo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\ContentSection;
use App\Models\CatalanData;
use App\Models\SpanishData;
use App\Models\Language;
use App\Http\Requests\Partner\PartnerStoreRequest;
use App\Http\Requests\Partner\PartnerUpdateRequest;
use App\Http\Requests\Image\ImageRequest;



class PartnerController extends Controller
{

     /**
     *
     * @param  \App\Http\Requests\Partner\PartnerStoreRequest
     * @param  \App\Http\Requests\Partner\PartnerUpdateRequest
     * @param  \App\Http\Requests\Image\ImageRequest
     * @return Illuminate\Http\Response
     */

    public function index()
    {
        $section = ContentSection::where('section_name', '=', 'partner')->first();
        $catData = CatalanData::where('title_content', '=', 'partner-main-text')->first();
        $spanishData = SpanishData::where('title_content', '=', 'partner-main-text')->first();
        return view('Backoffice.partner', [
            'catData' => $catData,
            'spanishData' => $spanishData,
            'section' => $section,
        ]);
    }

    public function store(PartnerStoreRequest $request)
    {
        $request->validated();

        $catText = $request->catalan_partner_text;
        $esText = $request->spanish_partner_text;

        DB::transaction(function () use ($catText, $esText) {
            $this->createPartnerMainTextCat($catText);
            $this->createPartnerMainTextEs($esText);
        });
        return redirect( route('partner'), 302);
    }

    public function createPartnerMainTextCat($text) {
        $catCode = Language::getId('cat');
        $section = ContentSection::getId('partner');

        CatalanData::create([
            'title_content' => 'partner-main-text',
            'text_content' => $text,
            'lang_id' => $catCode,
            'section_id' => $section,

        ]);
    }

    public function createPartnerMainTextEs($text) {
        $esCode = Language::getId('es');
        $section = ContentSection::getId('partner');

        SpanishData::create([
            'title_content' => 'partner-main-text',
            'text_content' => $text,
            'lang_id' => $esCode,
            'section_id' => $section,

        ]);
    }


    public function update(PartnerUpdateRequest $request, $id)
    {
        $request->validated();
        $language = Language::find($request->lang_id);
        
        if($language->language_code === 'cat'){
            $this->updateCat($request, $id);
            
        }
        if($language->language_code === 'es'){
            $this->updateSpanish($request, $id);
        }

        return redirect( route('partner'), 302 );
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
