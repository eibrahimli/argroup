<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Email;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class Team extends Resource
{

    public static $model = \App\Models\Team::class;

    public static $title = 'id';

    public static $search = [
        'id','title'
    ];

    public static $group = 'Əsas';

    public static function singularLabel(): string
    {
        return 'Komanda';
    }

    public static function label(): string
    {
        return 'Komanda';
    }

    public function fields(NovaRequest $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make('Ad Soyad','fullname'),

            Text::make('Vəzifə','position')->translatable(),
            Email::make('Email','email'),
            Number::make('Prioritet','priority'),

            Image::make('Şəkil','photo')->help('500x600 məsləhət görülür'),

        ];
    }

}
