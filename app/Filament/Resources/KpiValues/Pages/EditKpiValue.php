<?php

namespace App\Filament\Resources\KpiValues\Pages;

use App\Filament\Resources\KpiValues\KpiValueResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKpiValue extends EditRecord
{
    protected static string $resource = KpiValueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
