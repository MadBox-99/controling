<?php

namespace App\Filament\Resources\AnalyticsPageviews\Pages;

use App\Filament\Resources\AnalyticsPageviews\AnalyticsPageviewResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAnalyticsPageview extends EditRecord
{
    protected static string $resource = AnalyticsPageviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
