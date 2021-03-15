<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ContentSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_name',
        'section_image'
    ];

    public function spanishData()
    {
        $this->hasMany(SpanishData::class);
    }
    public function catalanData()
    {
        $this->hasMany(CatalanData::class);
    }

    public static function getId($nameSection) 
    {
        // dd($nameSection);
        $section = DB::table('content_sections')->where('section_name', '=', $nameSection)->first();
        return $section->id;
    }
}
