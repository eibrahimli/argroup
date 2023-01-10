<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Email;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Mostafaznv\NovaCkEditor\CkEditor;

class About extends Resource
{

    public static $model = \App\Models\About::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    public static $search = [
        'id','title'
    ];

    public static $group = 'Əsas';

    public static function label(): string
    {
        return 'Haqqımızda';
    }

    public static function singularLabel(): string
    {
        return 'Haqqımızda';
    }
    public function fields(NovaRequest $request): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Başlıq','title')->translatable(),
            Text::make('Kiçik açıqlama','small_desc')->translatable(),
            Email::make('Email', 'email'),
            Text::make('Nömrə', 'phone'),
            CkEditor::make('Məzmun', 'desc')->translatable(),
            Number::make('Tamamlanmış lahiyələr','closed_projects'),
            Number::make('Məmnun müştərilər','happy_clients'),
            Number::make('Tərəfdaşlar','partners'),
            Number::make('Mükafatlar','rewards'),
            File::make('Video','video'),

            Image::make('Logo', 'logo'),
            Image::make('Video şəkli', 'video_image'),
            Image::make('Banner', 'banner')
                ->help('1920x766 px məsləhət görülür'),


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
