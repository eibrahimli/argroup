<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Mostafaznv\NovaCkEditor\CkEditor;

class Blog extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Blog>
     */
    public static $model = \App\Models\Blog::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id','title'
    ];

    public static $group = 'Əsas';


    public static function label(): string
    {
        return 'Bloglar';
    }
    public static function singularLabel(): string
    {
        return 'Blog';
    }

    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Başlıq', 'title')->translatable(),
            CkEditor::make('Məzmun', 'desc')->translatable(),

            Textarea::make('Kiçik açıqlama', 'small_desc')->translatable(),
            Image::make('Blog əsas şəkil', 'main_photo')
                ->help('700x500 məsləhət görülür'),
            Image::make('Blog post şəkil', 'photo')
                ->help('1000x600 məsləhət görülür'),

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
