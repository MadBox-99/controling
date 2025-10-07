<?php

declare(strict_types=1);

namespace App\Filament\Resources\AnalyticsPageviews\Pages;

use App\Filament\Resources\AnalyticsPageviews\AnalyticsPageviewResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateAnalyticsPageview extends CreateRecord
{
    protected static string $resource = AnalyticsPageviewResource::class;
}
