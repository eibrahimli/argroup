<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Category extends Resource
{
    public static $model = \App\Models\Category::class;

    public static $title = 'name';

    public static $search = [
        'id','name'
    ];

    public static $group = 'Məhsul';

    public static function singularLabel(): string
    {
        return 'Kateqoriya';
    }

    public static function label(): string
    {
        return 'Kateqoriyalar';
    }

    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),

            Text::make('Ad', 'name')
        ];
    }
}
