<?php

declare(strict_types=1);

namespace App\Filament\Resources\SearchPages\Pages;

use App\Filament\Resources\SearchPages\SearchPageResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateSearchPage extends CreateRecord
{
    protected static string $resource = SearchPageResource::class;
}
