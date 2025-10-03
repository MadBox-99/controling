<?php

namespace App\Filament\Resources\SearchConsoleProperties\Pages;

use App\Filament\Resources\SearchConsoleProperties\SearchConsolePropertyResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSearchConsoleProperties extends ListRecords
{
    protected static string $resource = SearchConsolePropertyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
