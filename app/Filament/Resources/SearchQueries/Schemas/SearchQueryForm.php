<?php

declare(strict_types=1);

namespace App\Filament\Resources\SearchQueries\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

final class SearchQueryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                DatePicker::make('date')
                    ->required(),
                Textarea::make('query')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('country'),
                TextInput::make('device')
                    ->required(),
                TextInput::make('impressions')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('clicks')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('ctr')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('position')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
