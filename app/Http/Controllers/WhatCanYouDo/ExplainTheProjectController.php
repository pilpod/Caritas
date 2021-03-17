<?php

namespace App\Http\Controllers\WhatCanYouDo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ContentSection;
use App\Models\CatalanData;
use App\Models\SpanishData;
use App\Http\Requests\ExplainTheProject\ExplainTheProjectStoreRequest;
use App\Http\Requests\ExplainTheProject\ExplainTheProjectUpdateRequest;
use App\Http\Requests\Image\ImageRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Language;


class ExplainTheProjectController extends Controller
{
    
    /**
     *
     * @param  \App\Http\Requests\ExplainTheProject/ExplainTheProjectStoreRequest
     * @param  \App\Http\Requests\ExplainTheProject/ExplainTheProjectUpdateRequest
     * @param  \App\Http\Requests\Image\ImageRequest
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        $section = ContentSection::where('section_name', '=', 'explain-the-project')->first();
        $catData = CatalanData::where('title_content', '=', 'explainTheProject-main-text')->first();
        $spanishData = SpanishData::where('title_content', '=', 'explainTheProject-main-text')->first();
        return view('Backoffice.explainTheProject', [
            'catData' => $catData,
            'spanishData' => $spanishData,
            'section' => $section,
        ]);
    }

    public function store (ExplainTheProjectStoreRequest $request) 
    {
        $request->validated();

        $catText = $request->catalan_explainTheProject_text;
        $esText = $request->spanish_explainTheProject_text;

        DB::transaction(function () use ($catText, $esText) {
            $this->createExplainTheProjectMainTextCat($catText);
            $this->createExplainTheProjectMainTextEs($esText);
        });

        return redirect( route('explainTheProject'), 302);
    }

    public function createExplainTheProjectMainTextCat($text) {
        $catCode = Language::getId('cat');
        $section = ContentSection::getId('explain-the-project');

        CatalanData::create([
            'title_content' => 'explainTheProject-main-text',
            'text_content' => $text,
            'lang_id' => $catCode,
            'section_id' => $section,

        ]);
    }

    public function createExplainTheProjectMainTextEs($text) {
        $esCode = Language::getId('es');
        $section = ContentSection::getId('explain-the-project');

        SpanishData::create([
            'title_content' => 'explainTheProject-main-text',
            'text_content' => $text,
            'lang_id' => $esCode,
            'section_id' => $section,
        ]);
    }

    public function update(ExplainTheProjectUpdateRequest $request, $id)
    {
        $request->validated();
        $language = Language::find($request->lang_id);
        
        if($language->language_code === 'cat'){
            $this->updateCat($request, $id);
            
        }
        if($language->language_code === 'es'){
            $this->updateSpanish($request, $id);
        }

        return redirect( route('explainTheProject'), 302 );
    }

    public function updateCat($data, $id) 
    {
       
        $catData = CatalanData::where('section_id', '=', $id)->first();

        $catData->update([
            'language_id' => $catData->lang_id,
            'section_id' => $catData->section_id,
            'title_content' => $catData->title_content,
            'text_content' => $data->text_content,
        ]);
    }

    public function updateSpanish($data, $id) 
    {
       
        $spanishData = SpanishData::where('section_id', '=', $id)->first();
        $spanishData->update([
            'language_id' => $spanishData->lang_id,
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
