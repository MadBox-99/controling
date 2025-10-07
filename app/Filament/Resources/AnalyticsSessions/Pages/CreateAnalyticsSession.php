<?php

declare(strict_types=1);

namespace App\Filament\Resources\AnalyticsSessions\Pages;

use App\Filament\Resources\AnalyticsSessions\AnalyticsSessionResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateAnalyticsSession extends CreateRecord
{
    protected static string $resource = AnalyticsSessionResource::class;
}
