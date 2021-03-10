<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpanishData extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_content',
        'text_content',
        'lang_id',
        'section_id'
    ];
}
