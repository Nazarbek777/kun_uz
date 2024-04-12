<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    /**
     * @var mixed|string
     */
    protected $fillable = [
        'title',
        'content',
        'short_content',
        'news_type',
        'description',
        'image',

    ];



}
