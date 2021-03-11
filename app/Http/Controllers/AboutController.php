<?php

namespace App\Http\Controllers;

use App\Models\ContentSection;
use App\Models\SpanishData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Language;

class AboutController extends Controller
{
    public function index()
    {
        return view('Backoffice.about');
    }

    public function store(Request $request)
    {
        
    


        
    }

}
