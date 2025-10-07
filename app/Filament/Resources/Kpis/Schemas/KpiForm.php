<?php

declare(strict_types=1);

namespace App\Filament\Resources\Kpis\Schemas;

use App\Enums\KpiCategory;
use App\Enums\KpiDataSource;
use App\Enums\KpiFormat;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

final class KpiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('code')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                Select::make('data_source')
                    ->options(KpiDataSource::class)
                    ->required(),
                Textarea::make('formula')
                    ->columnSpanFull(),
                Select::make('category')
                    ->options(KpiCategory::class)
                    ->required(),
                Select::make('format')
                    ->options(KpiFormat::class)
                    ->required(),
                TextInput::make('target_value')
                    ->numeric(),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
