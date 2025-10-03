<?php

namespace App\Filament\Resources\SearchSitemaps\Pages;

use App\Filament\Resources\SearchSitemaps\SearchSitemapResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSearchSitemaps extends ListRecords
{
    protected static string $resource = SearchSitemapResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
