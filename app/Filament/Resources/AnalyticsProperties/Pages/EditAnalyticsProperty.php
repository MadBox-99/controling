<?php

namespace App\Filament\Resources\AnalyticsProperties\Pages;

use App\Filament\Resources\AnalyticsProperties\AnalyticsPropertyResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAnalyticsProperty extends EditRecord
{
    protected static string $resource = AnalyticsPropertyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
