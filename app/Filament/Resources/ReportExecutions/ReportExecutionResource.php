<?php

namespace App\Filament\Resources\ReportExecutions;

use App\Filament\Resources\ReportExecutions\Pages\CreateReportExecution;
use App\Filament\Resources\ReportExecutions\Pages\EditReportExecution;
use App\Filament\Resources\ReportExecutions\Pages\ListReportExecutions;
use App\Filament\Resources\ReportExecutions\Schemas\ReportExecutionForm;
use App\Filament\Resources\ReportExecutions\Tables\ReportExecutionsTable;
use App\Models\ReportExecution;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ReportExecutionResource extends Resource
{
    protected static ?string $model = ReportExecution::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

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
