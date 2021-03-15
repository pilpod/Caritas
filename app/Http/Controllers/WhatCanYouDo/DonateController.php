<?php

namespace App\Http\Controllers\WhatCanYouDo;

use Illuminate\Http\Request;
use App\Models\ContentSection;
use App\Models\CatalanData;
use App\Models\SpanishData;
use App\Http\Controllers\Controller;

class DonateController extends Controller
{
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
}
