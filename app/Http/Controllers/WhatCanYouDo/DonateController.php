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

class DonateController extends Controller
{
    /**
     *
     * @param  \App\Http\Requests\Donate\DonateStoreRequest
     * @param  \App\Http\Requests\About\AboutUpdateRequest
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
}
