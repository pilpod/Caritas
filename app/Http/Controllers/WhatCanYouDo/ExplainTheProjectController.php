<?php

namespace App\Http\Controllers\WhatCanYouDo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ContentSection;
use App\Models\CatalanData;
use App\Models\SpanishData;
use App\Http\Requests\ExplainTheProject\ExplainTheProjectStoreRequest;
use App\Http\Requests\ExplainTheProject\ExplainTheProjectUpdateRequest;
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
        $sectionId = ContentSection::getId('explain-the-project');
        $catData = CatalanData::where('title_content', '=', 'main_text');
        $spanishData = SpanishData::where('title_content', '=', 'main_text');
        return view('Backoffice.explainTheProject', [
            'catdata' => $catData,
            'spanishData' => $spanishData,
            'sectionId' => $sectionId,
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
    }

    public function createExplainTheProjectMainTextCat($text) {
        $catCode = Language::getId('cat');
        $section = ContentSection::getId('explain-the-project');

        CatalanData::create([
            'title_content' => 'explainTheProject_main_text',
            'text_content' => $text,
            'lang_id' => $catCode,
            'section_id' => $section,

        ]);
    }

    public function createExplainTheProjectMainTextEs($text) {
        $esCode = Language::getId('es');
        $section = ContentSection::getId('explain-the-project');

        SpanishData::create([
            'title_content' => 'explainTheProject_main_text',
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
