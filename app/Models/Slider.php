<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Slider extends Model
{
    use HasFactory, SoftDeletes, HasTranslations;

    protected $guarded = [];

    public $translatable = ['title', 'desc','seo_keys', 'seo_desc'];
}
