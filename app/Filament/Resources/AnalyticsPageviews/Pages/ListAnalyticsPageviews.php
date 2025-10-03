<?php

namespace App\Filament\Resources\AnalyticsPageviews\Pages;

use App\Filament\Resources\AnalyticsPageviews\AnalyticsPageviewResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAnalyticsPageviews extends ListRecords
{
    protected static string $resource = AnalyticsPageviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
