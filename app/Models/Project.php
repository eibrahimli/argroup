<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Project extends Model
{
    use HasFactory, HasTranslations;

    protected $guarded = [];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public $translatable = ['name','small_desc','desc', 'seo_desc', 'seo_keys'];

    protected function currentStatus(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->status ? 'Tamamlanmış': 'Tamamlanmamış',
        );
    }

    public function photo():string {
        return asset('storage/'.$this->photo);
    }

    public function path(): string {
        return route('project.show', $this->id);
    }
}
