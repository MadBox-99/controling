<?php

declare(strict_types=1);

namespace App\Filament\Resources\SearchSitemaps\Pages;

use App\Filament\Resources\SearchSitemaps\SearchSitemapResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateSearchSitemap extends CreateRecord
{
    protected static string $resource = SearchSitemapResource::class;
}
