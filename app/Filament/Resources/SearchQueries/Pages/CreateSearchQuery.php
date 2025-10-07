<?php

declare(strict_types=1);

namespace App\Filament\Resources\SearchQueries\Pages;

use App\Filament\Resources\SearchQueries\SearchQueryResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateSearchQuery extends CreateRecord
{
    protected static string $resource = SearchQueryResource::class;
}
