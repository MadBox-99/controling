<?php

declare(strict_types=1);

namespace App\Filament\Resources\SavedQueries;

use App\Enums\NavigationGroup;
use App\Filament\Resources\SavedQueries\Pages\CreateSavedQuery;
use App\Filament\Resources\SavedQueries\Pages\EditSavedQuery;
use App\Filament\Resources\SavedQueries\Pages\ListSavedQueries;
use App\Filament\Resources\SavedQueries\Schemas\SavedQueryForm;
use App\Filament\Resources\SavedQueries\Tables\SavedQueriesTable;
use App\Models\SavedQuery;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use UnitEnum;

final class SavedQueryResource extends Resource
{
    protected static ?string $model = SavedQuery::class;

    protected static string|UnitEnum|null $navigationGroup = NavigationGroup::Reports;

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
