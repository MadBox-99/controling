<?php

namespace App\Filament\Resources\SearchConsoleProperties\Pages;

use App\Filament\Resources\SearchConsoleProperties\SearchConsolePropertyResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSearchConsoleProperty extends EditRecord
{
    protected static string $resource = SearchConsolePropertyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
