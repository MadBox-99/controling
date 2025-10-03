<?php

namespace App\Filament\Resources\ReportExecutions\Pages;

use App\Filament\Resources\ReportExecutions\ReportExecutionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListReportExecutions extends ListRecords
{
    protected static string $resource = ReportExecutionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
