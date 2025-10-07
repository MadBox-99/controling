<?php

declare(strict_types=1);

namespace App\Filament\Resources\ReportExecutions\Pages;

use App\Filament\Resources\ReportExecutions\ReportExecutionResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateReportExecution extends CreateRecord
{
    protected static string $resource = ReportExecutionResource::class;
}
