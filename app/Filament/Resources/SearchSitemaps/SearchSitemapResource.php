<?php

declare(strict_types=1);

namespace App\Filament\Resources\SearchSitemaps;

use App\Enums\NavigationGroup;
use App\Filament\Resources\SearchSitemaps\Pages\CreateSearchSitemap;
use App\Filament\Resources\SearchSitemaps\Pages\EditSearchSitemap;
use App\Filament\Resources\SearchSitemaps\Pages\ListSearchSitemaps;
use App\Filament\Resources\SearchSitemaps\Schemas\SearchSitemapForm;
use App\Filament\Resources\SearchSitemaps\Tables\SearchSitemapsTable;
use App\Models\SearchSitemap;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use UnitEnum;

final class SearchSitemapResource extends Resource
{
    protected static ?string $model = SearchSitemap::class;

    protected static string|UnitEnum|null $navigationGroup = NavigationGroup::SearchConsole;

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
