<?php

declare(strict_types=1);

namespace App\Filament\Resources\AnalyticsEvents\Pages;

use App\Filament\Resources\AnalyticsEvents\AnalyticsEventResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateAnalyticsEvent extends CreateRecord
{
    protected static string $resource = AnalyticsEventResource::class;
}
