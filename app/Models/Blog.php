<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Blog extends Model
{
    use HasFactory, HasTranslations, SoftDeletes;

    protected $guarded = [];

    public $translatable = ['title', 'small_desc', 'desc','seo_keys', 'seo_desc'];

    public function createdDate(): Attribute
    {
        return Attribute::make(
            get: fn() => Carbon::make($this->created_at)->toDateString()
        );
    }

    public function photo():string {
        return asset('storage/'.@$this->photo);
    }

}
