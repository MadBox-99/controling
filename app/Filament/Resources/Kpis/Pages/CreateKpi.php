<?php

declare(strict_types=1);

namespace App\Filament\Resources\Kpis\Pages;

use App\Filament\Resources\Kpis\KpiResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateKpi extends CreateRecord
{
    protected static string $resource = KpiResource::class;
}
