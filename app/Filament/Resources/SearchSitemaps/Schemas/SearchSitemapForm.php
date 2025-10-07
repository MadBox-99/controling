<?php

declare(strict_types=1);

namespace App\Filament\Resources\SearchSitemaps\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

final class SearchSitemapForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('sitemap_url')
                    ->url()
                    ->required(),
                DateTimePicker::make('last_submitted'),
                Toggle::make('is_pending')
                    ->required(),
                TextInput::make('warnings')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('errors')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
