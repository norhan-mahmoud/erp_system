<?php

namespace App\Filament\Resources\Suppliers\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SupplierForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('phone')
                    ->tel(),
                TextInput::make('opening_balance')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                Select::make('balance_type')
                    ->options(['credit' => 'Credit', 'debit' => 'Debit', 'none' => 'None'])
                    ->default('none')
                    ->required(),
            ]);
    }
}
