<?php

namespace App\Filament\Resources\Items\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                Select::make('type')
                    ->options([
            'feed' => 'Feed',
            'medicine' => 'Medicine',
            'egg' => 'Egg',
            'quail_live' => 'Quail live',
            'quail_cleaned' => 'Quail cleaned',
        ])
                    ->required(),
                Select::make('unit')
                    ->options(['kg' => 'Kg', 'piece' => 'Piece'])
                    ->required(),
            ]);
    }
}
