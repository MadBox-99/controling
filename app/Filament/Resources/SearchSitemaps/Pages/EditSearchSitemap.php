<?php

declare(strict_types=1);

namespace App\Filament\Resources\SearchSitemaps\Pages;

use App\Filament\Resources\SearchSitemaps\SearchSitemapResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

final class EditSearchSitemap extends EditRecord
{
    protected static string $resource = SearchSitemapResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
