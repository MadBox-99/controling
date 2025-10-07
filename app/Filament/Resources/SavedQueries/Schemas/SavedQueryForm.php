<?php

declare(strict_types=1);

namespace App\Filament\Resources\SavedQueries\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

final class SavedQueryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('query_type')
                    ->required(),
                Textarea::make('parameters')
                    ->columnSpanFull(),
                Textarea::make('query_definition')
                    ->required()
                    ->columnSpanFull(),
                Toggle::make('is_parameterized')
                    ->required(),
            ]);
    }
}
