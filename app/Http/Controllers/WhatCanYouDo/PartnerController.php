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
        $sectionId = ContentSection::getId('partner');
        $catData = CatalanData::where('title_content', '=', 'main_text');
        $spanishData = SpanishData::where('title_content', '=', 'main_text');
        return view('Backoffice.partner', [
            'catdata' => $catData,
            'spanishData' => $spanishData,
            'sectionId' => $sectionId,
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

    }

    public function createPartnerMainTextCat($text) {
        $catCode = Language::getId('cat');
        $section = ContentSection::getId('partner');

        CatalanData::create([
            'title_content' => 'partner_main_text',
            'text_content' => $text,
            'lang_id' => $catCode,
            'section_id' => $section,

        ]);
    }

    public function createPartnerMainTextEs($text) {
        $esCode = Language::getId('es');
        $section = ContentSection::getId('partner');

        SpanishData::create([
            'title_content' => 'partner_main_text',
            'text_content' => $text,
            'lang_id' => $esCode,
            'section_id' => $section,

        ]);
    }
}
