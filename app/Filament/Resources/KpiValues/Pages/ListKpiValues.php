<?php

namespace App\Filament\Resources\KpiValues\Pages;

use App\Filament\Resources\KpiValues\KpiValueResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKpiValues extends ListRecords
{
    protected static string $resource = KpiValueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
