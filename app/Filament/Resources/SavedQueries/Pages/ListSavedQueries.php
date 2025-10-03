<?php

namespace App\Filament\Resources\SavedQueries\Pages;

use App\Filament\Resources\SavedQueries\SavedQueryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSavedQueries extends ListRecords
{
    protected static string $resource = SavedQueryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
