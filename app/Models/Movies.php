<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'ogranichenia_id',
        'name',
        'movies',
        'preview',
        'description',
        'likes',
        'dislikes'
    ];
}
