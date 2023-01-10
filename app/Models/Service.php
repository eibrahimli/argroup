<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Service extends Model
{
    use HasFactory, HasTranslations, SoftDeletes;

    public $translatable = ['title', 'small_desc', 'desc','seo_keys', 'seo_desc'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(ServiceCategory::class,'service_category_id','id');
    }
}
