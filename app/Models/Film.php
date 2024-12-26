<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Genre;

class Film extends Model
{

    protected $table = "films";
    protected $fillable = ["title", "summary", "release_year", "poster", "genre_id"];

    public function genre()
{
    return $this->belongsTo(Genre::class, 'genre_id', 'id');
}

public function reviews()
{
    return $this->hasMany(Genre::class);
}
    use HasFactory;
}
