<?php

declare(strict_types=1);

namespace App\Filament\Resources\SavedQueries\Pages;

use App\Filament\Resources\SavedQueries\SavedQueryResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateSavedQuery extends CreateRecord
{
    protected static string $resource = SavedQueryResource::class;
}
