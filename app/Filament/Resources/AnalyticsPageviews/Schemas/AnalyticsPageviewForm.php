<?php

declare(strict_types=1);

namespace App\Filament\Resources\AnalyticsPageviews\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

final class AnalyticsPageviewForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                DatePicker::make('date')
                    ->required(),
                Textarea::make('page_path')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('page_title')
                    ->required(),
                TextInput::make('pageviews')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('unique_pageviews')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('avg_time_on_page')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('entrances')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('bounce_rate')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('exit_rate')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
