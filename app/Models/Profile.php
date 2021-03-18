<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'org_email',
        'direction',
        'city',
        'postcode',
        'phone',
        'bankAccount',
        'bizum',
        'logo',
        'user_id',
    ];

    public function user() 
    {
        $this->hasOne(User::class);
    }
}
