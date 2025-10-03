<?php

namespace App\Filament\Resources\SearchPages;

use App\Filament\Resources\SearchPages\Pages\CreateSearchPage;
use App\Filament\Resources\SearchPages\Pages\EditSearchPage;
use App\Filament\Resources\SearchPages\Pages\ListSearchPages;
use App\Filament\Resources\SearchPages\Schemas\SearchPageForm;
use App\Filament\Resources\SearchPages\Tables\SearchPagesTable;
use App\Models\SearchPage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SearchPageResource extends Resource
{
    protected static ?string $model = SearchPage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return SearchPageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SearchPagesTable::configure($table);
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
            'index' => ListSearchPages::route('/'),
            'create' => CreateSearchPage::route('/create'),
            'edit' => EditSearchPage::route('/{record}/edit'),
        ];
    }
}
