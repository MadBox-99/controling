<?php

namespace App\Filament\Resources\SearchSitemaps;

use App\Filament\Resources\SearchSitemaps\Pages\CreateSearchSitemap;
use App\Filament\Resources\SearchSitemaps\Pages\EditSearchSitemap;
use App\Filament\Resources\SearchSitemaps\Pages\ListSearchSitemaps;
use App\Filament\Resources\SearchSitemaps\Schemas\SearchSitemapForm;
use App\Filament\Resources\SearchSitemaps\Tables\SearchSitemapsTable;
use App\Models\SearchSitemap;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SearchSitemapResource extends Resource
{
    protected static ?string $model = SearchSitemap::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return SearchSitemapForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SearchSitemapsTable::configure($table);
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
            'index' => ListSearchSitemaps::route('/'),
            'create' => CreateSearchSitemap::route('/create'),
            'edit' => EditSearchSitemap::route('/{record}/edit'),
        ];
    }
}
