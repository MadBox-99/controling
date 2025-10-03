<?php

namespace App\Filament\Resources\SavedQueries\Pages;

use App\Filament\Resources\SavedQueries\SavedQueryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSavedQuery extends EditRecord
{
    protected static string $resource = SavedQueryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
