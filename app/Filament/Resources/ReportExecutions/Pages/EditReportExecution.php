<?php

namespace App\Filament\Resources\ReportExecutions\Pages;

use App\Filament\Resources\ReportExecutions\ReportExecutionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditReportExecution extends EditRecord
{
    protected static string $resource = ReportExecutionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
