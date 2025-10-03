<?php

namespace App\Filament\Resources\AnalyticsSessions\Pages;

use App\Filament\Resources\AnalyticsSessions\AnalyticsSessionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAnalyticsSessions extends ListRecords
{
    protected static string $resource = AnalyticsSessionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
