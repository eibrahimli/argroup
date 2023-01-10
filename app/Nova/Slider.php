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
use Laravel\Nova\Fields\URL;
use Laravel\Nova\Http\Requests\NovaRequest;
use Mostafaznv\NovaCkEditor\CkEditor;

class Slider extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Slider>
     */
    public static $model = \App\Models\Slider::class;

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
        return 'Sliderlar';
    }

    public static function singularLabel(): string
    {
        return 'Slider';
    }

    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Başlıq','title')->translatable(),
            Textarea::make('Məzmun', 'desc')->translatable(),
            URL::make('Link', 'link')->nullable(),

            Image::make('Şəkil', 'photo'),

            Textarea::make('Seo açıqlama', 'seo_desc')->translatable(),
            Text::make('Seo açar sözlər', 'seo_keys')->translatable(),
        ];
    }

}
