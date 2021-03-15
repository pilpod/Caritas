<?php

namespace App\Http\Controllers\WhatCanYouDo;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\ContentSection;
use App\Models\CatalanData;
use App\Models\SpanishData;



class VolunteerController extends Controller
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
        $esData = SpanishData::where('title_content', '=', 'main_text');

        return view('Backoffice.volunteer', [
            'catData' => $catData,
            'esData' => $esData,
            'sectionId' => $sectionId,
        ]);

    }
}
