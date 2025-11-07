<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'excerpt',
        'image',
        'type',
        'featured',
        'published_date',
    ];

    protected $casts = [
        'featured' => 'boolean',
        'published_date' => 'date',
    ];
}
