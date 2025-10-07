<?php

declare(strict_types=1);

namespace App\Filament\Resources\ReportExecutions\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

final class ReportExecutionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('report_id')
                    ->relationship('report', 'name')
                    ->required(),
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Textarea::make('parameters')
                    ->columnSpanFull(),
                DateTimePicker::make('executed_at')
                    ->required(),
                TextInput::make('execution_time_ms')
                    ->required()
                    ->numeric(),
                TextInput::make('row_count')
                    ->required()
                    ->numeric(),
            ]);
    }
}
