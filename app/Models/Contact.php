<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Contact extends Model
{
    use HasFactory, HasTranslations;

    protected $guarded = [];

    public $translatable = ['title','smallTitle','desc', 'seo_desc', 'seo_keys'];
}
