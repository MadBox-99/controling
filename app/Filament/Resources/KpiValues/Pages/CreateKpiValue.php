<?php

declare(strict_types=1);

namespace App\Filament\Resources\KpiValues\Pages;

use App\Filament\Resources\KpiValues\KpiValueResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateKpiValue extends CreateRecord
{
    protected static string $resource = KpiValueResource::class;
}
