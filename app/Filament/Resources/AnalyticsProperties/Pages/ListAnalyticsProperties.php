<?php

namespace App\Filament\Resources\AnalyticsProperties\Pages;

use App\Filament\Resources\AnalyticsProperties\AnalyticsPropertyResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAnalyticsProperties extends ListRecords
{
    protected static string $resource = AnalyticsPropertyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
