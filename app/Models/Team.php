<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Team extends Model
{
    use HasFactory,HasTranslations,SoftDeletes;

    protected $guarded = [];

    public $translatable = ['position'];
}
