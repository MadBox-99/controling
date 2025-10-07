<?php

declare(strict_types=1);

namespace App\Filament\Resources\AnalyticsEvents\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

final class AnalyticsEventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                DatePicker::make('date')
                    ->required(),
                TextInput::make('event_name')
                    ->required(),
                TextInput::make('event_category')
                    ->required(),
                TextInput::make('event_action')
                    ->required(),
                TextInput::make('event_label'),
                TextInput::make('event_count')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('event_value')
                    ->numeric(),
            ]);
    }
}
