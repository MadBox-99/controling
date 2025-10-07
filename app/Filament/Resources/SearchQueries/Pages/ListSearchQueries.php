<?php

declare(strict_types=1);

namespace App\Filament\Resources\SearchQueries\Pages;

use App\Filament\Resources\SearchQueries\SearchQueryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

final class ListSearchQueries extends ListRecords
{
    protected static string $resource = SearchQueryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
