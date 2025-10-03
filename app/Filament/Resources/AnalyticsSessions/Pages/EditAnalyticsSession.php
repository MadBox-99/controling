<?php

namespace App\Filament\Resources\AnalyticsSessions\Pages;

use App\Filament\Resources\AnalyticsSessions\AnalyticsSessionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAnalyticsSession extends EditRecord
{
    protected static string $resource = AnalyticsSessionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
