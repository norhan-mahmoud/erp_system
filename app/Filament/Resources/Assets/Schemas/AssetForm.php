<?php

namespace App\Filament\Resources\Assets\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class AssetForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('purchase_value')
                    ->required()
                    ->numeric(),
                TextInput::make('salvage_value')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                TextInput::make('useful_life_months')
                    ->required()
                    ->numeric(),
                DatePicker::make('purchase_date')
                    ->required(),
                DatePicker::make('start_date')
                    ->required(),
                TextInput::make('accumulated_depreciation')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                Toggle::make('is_opening')
                    ->required(),
            ]);
    }
}
