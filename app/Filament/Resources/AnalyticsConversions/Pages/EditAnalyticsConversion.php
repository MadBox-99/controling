<?php

declare(strict_types=1);

namespace App\Filament\Resources\AnalyticsConversions\Pages;

use App\Filament\Resources\AnalyticsConversions\AnalyticsConversionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

final class EditAnalyticsConversion extends EditRecord
{
    protected static string $resource = AnalyticsConversionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
