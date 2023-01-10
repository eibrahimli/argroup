<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class About extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['title', 'small_desc', 'desc','seo_keys', 'seo_desc'];

}
