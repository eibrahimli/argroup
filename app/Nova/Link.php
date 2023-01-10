<?php

namespace App\Nova;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Sixlive\TextCopy\TextCopy;


class Link extends Resource
{

    public static $model = \App\Models\Link::class;

    public static $title = 'id';

    public static $search = [
        'id',
    ];

    public static $group = 'Əlavələr';

    public static function singularLabel(): string
    {
        return 'Link';
    }

    public static function label(): string
    {
        return 'Linklər';
    }

    public function fields(NovaRequest $request): array
    {
        return [
            ID::make()->sortable(),

            File::make('File','file'),
            Boolean::make('Aktiv','active'),

            Text::make('Url')
                ->displayUsing(fn () => route('main.links', Carbon::make($this->created_at)->getTimestamp()))
                ->onlyOnDetail()

        ];
    }

}
