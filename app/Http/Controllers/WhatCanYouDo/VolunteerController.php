<?php

namespace App\Http\Controllers\WhatCanYouDo;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\ContentSection;
use App\Models\CatalanData;
use App\Models\SpanishData;
use App\Http\Requests\Volunteer\VolunteerStoreRequest;
use App\Models\Language;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;

class VolunteerController extends Controller
{

     /**
     *
     * @param  \App\Http\Requests\Donate\VolunteerStoreRequest
     * @param  \App\Http\Requests\About\DonateUpdateRequest
     * @param  \App\Http\Requests\Image\ImageRequest
     * @return Illuminate\Http\Response
     */

    public function index() 
    {
        $sectionId = ContentSection::getId('volunteer');
        $catData = CatalanData::where('title_content', '=', 'main_text');
        $esData = SpanishData::where('title_content', '=', 'main_text');

        return view('Backoffice.volunteer', [
            'catData' => $catData,
            'esData' => $esData,
            'sectionId' => $sectionId,
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
    }

    public function createVolunteerMainTextCat($text)
    {
        $catCode = Language::getId('cat');
        $section = ContentSection::getId('volunteer');
        CatalanData::create([
            'title_content' => 'volunteer_main_text',
            'text_content' => $text,
            'lang_id' => $catCode,
            'section_id' => $section
        ]);
    }

    public function createVolunteerMainTextEs($text)
    {
        $esCode = Language::getId('es');
        $section = ContentSection::getId('volunteer');
        CatalanData::create([
            'title_content' => 'volunteer_main_text',
            'text_content' => $text,
            'lang_id' => $esCode,
            'section_id' => $section
        ]);
    }


}
