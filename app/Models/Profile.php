<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'direction',
        'city',
        'phone',
        'bankAccount',
        'bizum',
        'logo',
        'user_id',
    ];

    public function user() 
    {
        $this->belongsTo(User::class);
    }
}
