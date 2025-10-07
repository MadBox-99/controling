<?php

declare(strict_types=1);

namespace App\Filament\Resources\AnalyticsSessions\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

final class AnalyticsSessionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                DatePicker::make('date')
                    ->required(),
                TextInput::make('sessions')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('users')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('new_users')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('bounce_rate')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('avg_session_duration')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('pages_per_session')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('source'),
                TextInput::make('medium'),
                TextInput::make('campaign'),
            ]);
    }
}
