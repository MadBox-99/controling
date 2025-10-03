<?php

namespace App\Filament\Resources\AnalyticsConversions\Pages;

use App\Filament\Resources\AnalyticsConversions\AnalyticsConversionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAnalyticsConversions extends ListRecords
{
    protected static string $resource = AnalyticsConversionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
