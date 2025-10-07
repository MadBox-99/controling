<?php

declare(strict_types=1);

namespace App\Filament\Resources\AnalyticsConversions\Pages;

use App\Filament\Resources\AnalyticsConversions\AnalyticsConversionResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateAnalyticsConversion extends CreateRecord
{
    protected static string $resource = AnalyticsConversionResource::class;
}
