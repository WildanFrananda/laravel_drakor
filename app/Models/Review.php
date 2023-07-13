<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'movie_id',
        'user_id',
        'date',
        'description',
        'rating',
    ];

    public function movies() 
    {
        return $this->belongsTo(Movie::class, 'movie_id');
    }

    public function users() 
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
