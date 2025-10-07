<?php

declare(strict_types=1);

namespace App\Filament\Resources\SearchPages\Pages;

use App\Filament\Resources\SearchPages\SearchPageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

final class EditSearchPage extends EditRecord
{
    protected static string $resource = SearchPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
