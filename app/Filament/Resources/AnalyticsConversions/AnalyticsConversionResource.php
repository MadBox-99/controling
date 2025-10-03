<?php

namespace App\Filament\Resources\AnalyticsConversions;

use App\Filament\Resources\AnalyticsConversions\Pages\CreateAnalyticsConversion;
use App\Filament\Resources\AnalyticsConversions\Pages\EditAnalyticsConversion;
use App\Filament\Resources\AnalyticsConversions\Pages\ListAnalyticsConversions;
use App\Filament\Resources\AnalyticsConversions\Schemas\AnalyticsConversionForm;
use App\Filament\Resources\AnalyticsConversions\Tables\AnalyticsConversionsTable;
use App\Models\AnalyticsConversion;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AnalyticsConversionResource extends Resource
{
    protected static ?string $model = AnalyticsConversion::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return AnalyticsConversionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AnalyticsConversionsTable::configure($table);
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
            'index' => ListAnalyticsConversions::route('/'),
            'create' => CreateAnalyticsConversion::route('/create'),
            'edit' => EditAnalyticsConversion::route('/{record}/edit'),
        ];
    }
}
