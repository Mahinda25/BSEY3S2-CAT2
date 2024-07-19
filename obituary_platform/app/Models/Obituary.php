<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Obituary extends Model
{
    protected $fillable = [
        'name',
        'date_of_birth',
        'date_of_death',
        'content',
        'author',
        'submission_date',
        'slug',
    ];

    
}
