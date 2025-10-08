<?php

declare(strict_types=1);

namespace App\Filament\Resources\SearchPages\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

final class SearchPagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('date')
                    ->date()
                    ->sortable(),
                TextColumn::make('page_url')
                    ->searchable()
                    ->weight('bold')
                    ->wrap()
                    ->limit(50),
                TextColumn::make('device')
                    ->searchable(),
                TextColumn::make('impressions')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('clicks')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('ctr')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('position')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
