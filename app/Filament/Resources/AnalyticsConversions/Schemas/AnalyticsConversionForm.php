<?php

declare(strict_types=1);

namespace App\Filament\Resources\AnalyticsConversions\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

final class AnalyticsConversionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                DatePicker::make('date')
                    ->required(),
                TextInput::make('goal_name')
                    ->required(),
                TextInput::make('goal_completions')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('goal_value')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('conversion_rate')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
