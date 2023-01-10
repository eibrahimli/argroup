<?php

namespace App\Nova;

use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Mostafaznv\NovaCkEditor\CkEditor;

class Product extends Resource
{

    public static $model = \App\Models\Product::class;

    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id','title'
    ];

    public static $group = 'Məhsul';

    public static function label(): string
    {
        return 'Məhsullar';
    }

    public static function singularLabel(): string
    {
        return 'Məhsul';
    }

    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Başlıq','title')->translatable(),
            Text::make('Kiçik açıqlama','small_desc')->translatable(),
            CkEditor::make('Məzmun', 'desc')->translatable(),
            Text::make('Qiymət','price')->help('Boş olduqda görsənməyəcək'),

            Image::make('Əsas şəkil', 'main_photo')->help('900x1057 məsləhət görülür'),
            Images::make('Şəkillər', 'main')
                ->help('900x1057 məsləhət görülür')
                ->conversionOnIndexView('thumb')
                ->croppable(true),

            File::make('Kataloq', 'catalog')->nullable(),

            BelongsTo::make('Brend','brand', Brand::class)->nullable(),
            BelongsTo::make('Kateqoriya','category', Category::class)->nullable(),

            Textarea::make('Seo açıqlama', 'seo_desc')->translatable(),
            Text::make('Seo açar sözlər', 'seo_keys')->translatable(),
        ];
    }

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
