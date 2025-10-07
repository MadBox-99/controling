<?php

declare(strict_types=1);

namespace App\Filament\Resources\ReportExecutions;

use App\Enums\NavigationGroup;
use App\Filament\Resources\ReportExecutions\Pages\CreateReportExecution;
use App\Filament\Resources\ReportExecutions\Pages\EditReportExecution;
use App\Filament\Resources\ReportExecutions\Pages\ListReportExecutions;
use App\Filament\Resources\ReportExecutions\Schemas\ReportExecutionForm;
use App\Filament\Resources\ReportExecutions\Tables\ReportExecutionsTable;
use App\Models\ReportExecution;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use UnitEnum;

final class ReportExecutionResource extends Resource
{
    protected static ?string $model = ReportExecution::class;

    protected static string|UnitEnum|null $navigationGroup = NavigationGroup::Reports;

    public static function form(Schema $schema): Schema
    {
        return ReportExecutionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ReportExecutionsTable::configure($table);
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
            'index' => ListReportExecutions::route('/'),
            'create' => CreateReportExecution::route('/create'),
            'edit' => EditReportExecution::route('/{record}/edit'),
        ];
    }
}
