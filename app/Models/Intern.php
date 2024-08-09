<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intern extends Model
{
    protected $fillable = [
        'current_education_level',
        'technical_expertise',
        'bio_information',
    ];

    protected $casts = [
        'technical_expertise' => 'array',
        'bio_information' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

