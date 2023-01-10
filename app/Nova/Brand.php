<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class Brand extends Resource
{

    public static $model = \App\Models\Brand::class;

    public static $title = 'name';

    public static $search = [
        'id', 'name'
    ];

    public static $group = 'Məhsul';

    public static function label(): string
    {
        return 'Brendlər';
    }

    public static function singularLabel(): string
    {
        return 'Brend';
    }

    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Ad','name')->translatable(),
            Image::make('Logo', 'logo'),

            Textarea::make('Seo açıqlama', 'seo_desc')->translatable(),
            Text::make('Seo açar sözlər', 'seo_keys')->translatable(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
