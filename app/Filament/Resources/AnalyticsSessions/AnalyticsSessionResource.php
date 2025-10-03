<?php

namespace App\Filament\Resources\AnalyticsSessions;

use App\Filament\Resources\AnalyticsSessions\Pages\CreateAnalyticsSession;
use App\Filament\Resources\AnalyticsSessions\Pages\EditAnalyticsSession;
use App\Filament\Resources\AnalyticsSessions\Pages\ListAnalyticsSessions;
use App\Filament\Resources\AnalyticsSessions\Schemas\AnalyticsSessionForm;
use App\Filament\Resources\AnalyticsSessions\Tables\AnalyticsSessionsTable;
use App\Models\AnalyticsSession;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AnalyticsSessionResource extends Resource
{
    protected static ?string $model = AnalyticsSession::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return AnalyticsSessionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AnalyticsSessionsTable::configure($table);
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
            'index' => ListAnalyticsSessions::route('/'),
            'create' => CreateAnalyticsSession::route('/create'),
            'edit' => EditAnalyticsSession::route('/{record}/edit'),
        ];
    }
}
