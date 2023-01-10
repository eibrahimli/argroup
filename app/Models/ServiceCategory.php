<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class ServiceCategory extends Model
{
    use HasFactory, HasTranslations, SoftDeletes;

    protected $guarded = [];

    public $translatable = ['name', 'seo_desc', 'seo_keys'];

    public function services(): HasMany
    {
        return $this->hasMany(Service::class,'service_category_id');
    }
}
