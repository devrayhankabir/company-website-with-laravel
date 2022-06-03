<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    protected $fillable = [

        'title',
        'sub_title',
        'long_desc',
        'line_desc',
        'short_desc',
    ];
}
