<?php

namespace App\Filament\Resources\SearchConsoleProperties;

use App\Filament\Resources\SearchConsoleProperties\Pages\CreateSearchConsoleProperty;
use App\Filament\Resources\SearchConsoleProperties\Pages\EditSearchConsoleProperty;
use App\Filament\Resources\SearchConsoleProperties\Pages\ListSearchConsoleProperties;
use App\Filament\Resources\SearchConsoleProperties\Schemas\SearchConsolePropertyForm;
use App\Filament\Resources\SearchConsoleProperties\Tables\SearchConsolePropertiesTable;
use App\Models\SearchConsoleProperty;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SearchConsolePropertyResource extends Resource
{
    protected static ?string $model = SearchConsoleProperty::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return SearchConsolePropertyForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SearchConsolePropertiesTable::configure($table);
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
            'index' => ListSearchConsoleProperties::route('/'),
            'create' => CreateSearchConsoleProperty::route('/create'),
            'edit' => EditSearchConsoleProperty::route('/{record}/edit'),
        ];
    }
}
