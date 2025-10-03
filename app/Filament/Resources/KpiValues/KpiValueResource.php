<?php

namespace App\Filament\Resources\KpiValues;

use App\Filament\Resources\KpiValues\Pages\CreateKpiValue;
use App\Filament\Resources\KpiValues\Pages\EditKpiValue;
use App\Filament\Resources\KpiValues\Pages\ListKpiValues;
use App\Filament\Resources\KpiValues\Schemas\KpiValueForm;
use App\Filament\Resources\KpiValues\Tables\KpiValuesTable;
use App\Models\KpiValue;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KpiValueResource extends Resource
{
    protected static ?string $model = KpiValue::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return KpiValueForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KpiValuesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListKpiValues::route('/'),
            'create' => CreateKpiValue::route('/create'),
            'edit' => EditKpiValue::route('/{record}/edit'),
        ];
    }
}
