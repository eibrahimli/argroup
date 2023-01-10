<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Email;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\URL;
use Laravel\Nova\Http\Requests\NovaRequest;

class Contact extends Resource
{
    public static $model = \App\Models\Contact::class;

    public static $title = 'id';

    public static $group = 'Əsas';


    public static $search = [
        'id','title',
    ];

    public static function label(): string
    {
        return 'Əlaqə';
    }
    public static function singularLabel(): string
    {
        return 'Əlaqə';
    }

    public function fields(NovaRequest $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make('Başlıq', 'title')->translatable(),
            Text::make('Kiçik Başlıq', 'smallTitle')->translatable(),

            Textarea::make('Açıqlama','desc')->help('qısa açıqlama')->translatable(),

            Text::make('Adres', 'address'),
            Text::make('Nömrələr', 'numbers')->help('Bir dən çox olarsa <b> { , } </b> ilə ayır'),
            Email::make('Email', 'email')->help('Bir dən çox olarsa <b> { , } </b> ilə ayır'),

            URL::make('Whatsapp', 'wp'),
            URL::make('Facebook', 'fb'),
            URL::make('Instagram', 'in'),
            URL::make('LinkedIn', 'ln'),
            URL::make('Youtube', 'yt'),

            Textarea::make('Seo açıqlama', 'seo_desc')->translatable(),
            Text::make('Seo açar sözlər', 'seo_keys')->translatable(),
        ];
    }


    public function cards(NovaRequest $request):array
    {
        return [];
    }

    public function filters(NovaRequest $request):array
    {
        return [];
    }

    public function lenses(NovaRequest $request):array
    {
        return [];
    }

    public function actions(NovaRequest $request):array
    {
        return [];
    }
}
