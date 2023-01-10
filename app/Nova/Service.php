<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Mostafaznv\NovaCkEditor\CkEditor;

class Service extends Resource
{
    public static $model = \App\Models\Service::class;

    public static $title = 'id';

    public static $search = [
        'id','title'
    ];

    public static $group = 'Əsas';


    public static function label(): string
    {
        return 'Servislər';
    }
    public static function singularLabel(): string
    {
        return 'Servis';
    }

    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Başlıq', 'title')->translatable(),
            CkEditor::make('Məzmun', 'desc')->translatable(),

            Textarea::make('Kiçik açıqlama', 'small_desc')->translatable(),
            Image::make('Servis əsas şəkil', 'main_photo')
                ->help('700x500 məsləhət görülür'),
            Image::make('Servis post şəkil', 'photo')
                ->help('1000x600 məsləhət görülür'),

            Textarea::make('Seo açıqlama', 'seo_desc')->translatable(),
            Text::make('Seo açar sözlər', 'seo_keys')->translatable(),

            BelongsTo::make('Kateqoriya', 'category', 'App\Nova\ServiceCategory')
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
