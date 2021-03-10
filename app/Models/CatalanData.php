<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatalanData extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_content',
        'text_content',
        'lang_id',
        'section_id'
    ];

    public function language()
    {
        $this->belongsTo(Language::class);
    }

    public function Section()
    {
        $this->belongsTo(ContentSection::class);
    }
}
