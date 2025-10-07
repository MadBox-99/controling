<?php

declare(strict_types=1);

namespace App\Filament\Resources\SavedQueries\Pages;

use App\Filament\Resources\SavedQueries\SavedQueryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

final class EditSavedQuery extends EditRecord
{
    protected static string $resource = SavedQueryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
