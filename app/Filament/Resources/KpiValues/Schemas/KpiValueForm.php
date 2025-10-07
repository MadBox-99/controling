<?php

declare(strict_types=1);

namespace App\Filament\Resources\KpiValues\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

final class KpiValueForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make(\App\Models\Kpi::class)
                    ->required()
                    ->numeric(),
                DatePicker::make('period')
                    ->required(),
                TextInput::make('planned_value')
                    ->numeric(),
                TextInput::make('actual_value')
                    ->required()
                    ->numeric(),
                TextInput::make('variance')
                    ->required()
                    ->numeric(),
                TextInput::make('variance_percentage')
                    ->required()
                    ->numeric(),
            ]);
    }
}
