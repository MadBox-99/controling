<?php

namespace App\Filament\Resources\AnalyticsProperties;

use App\Filament\Resources\AnalyticsProperties\Pages\CreateAnalyticsProperty;
use App\Filament\Resources\AnalyticsProperties\Pages\EditAnalyticsProperty;
use App\Filament\Resources\AnalyticsProperties\Pages\ListAnalyticsProperties;
use App\Filament\Resources\AnalyticsProperties\Schemas\AnalyticsPropertyForm;
use App\Filament\Resources\AnalyticsProperties\Tables\AnalyticsPropertiesTable;
use App\Models\AnalyticsProperty;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AnalyticsPropertyResource extends Resource
{
    protected static ?string $model = AnalyticsProperty::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return AnalyticsPropertyForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AnalyticsPropertiesTable::configure($table);
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
            'index' => ListAnalyticsProperties::route('/'),
            'create' => CreateAnalyticsProperty::route('/create'),
            'edit' => EditAnalyticsProperty::route('/{record}/edit'),
        ];
    }
}
