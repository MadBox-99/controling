<?php

namespace App\Filament\Resources\SavedQueries;

use App\Filament\Resources\SavedQueries\Pages\CreateSavedQuery;
use App\Filament\Resources\SavedQueries\Pages\EditSavedQuery;
use App\Filament\Resources\SavedQueries\Pages\ListSavedQueries;
use App\Filament\Resources\SavedQueries\Schemas\SavedQueryForm;
use App\Filament\Resources\SavedQueries\Tables\SavedQueriesTable;
use App\Models\SavedQuery;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SavedQueryResource extends Resource
{
    protected static ?string $model = SavedQuery::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return SavedQueryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SavedQueriesTable::configure($table);
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
            'index' => ListSavedQueries::route('/'),
            'create' => CreateSavedQuery::route('/create'),
            'edit' => EditSavedQuery::route('/{record}/edit'),
        ];
    }
}
