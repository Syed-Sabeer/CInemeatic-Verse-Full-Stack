<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies'; // Make sure this matches your table name

    // If using fillable or guarded properties
    protected $fillable = [
        'title', 'description', 'tagline', 'genre', 'release_year', 'runtime', 'rated', 'imdb', 'poster_img', 'trailer_link', 'download_link', 'watch_link'
    ];
}
