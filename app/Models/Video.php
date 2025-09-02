<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;


  protected $fillable = [
        'title',
        'type',
        'thumbnail',
        'video_url',
        'external_link',
    ];


}
