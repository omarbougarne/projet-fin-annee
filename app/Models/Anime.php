<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'synopsis',
        'episodes',
        'status',
        'rating',
        'start_date',
        'end_date',
        'image_url',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
