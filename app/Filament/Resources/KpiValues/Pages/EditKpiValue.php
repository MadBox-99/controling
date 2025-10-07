<?php

declare(strict_types=1);

namespace App\Filament\Resources\KpiValues\Pages;

use App\Filament\Resources\KpiValues\KpiValueResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

final class EditKpiValue extends EditRecord
{
    protected static string $resource = KpiValueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
