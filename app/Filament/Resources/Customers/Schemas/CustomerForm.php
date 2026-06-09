<?php

namespace App\Filament\Resources\Customers\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CustomerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('phone')
                    ->tel(),
                TextInput::make('facebook_profile_url')
                    ->url(),
                TextInput::make('other_url')
                    ->url(),
                TextInput::make('opening_balance')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                Select::make('balance_type')
                    ->options(['credit' => 'Credit', 'debit' => 'Debit', 'none' => 'None'])
                    ->default('none')
                    ->required(),

                Repeater::make('addresses')
                    ->relationship('addresses')
                    ->schema([
                        TextInput::make('address')
                            ->label('Address')
                            ->required()
                            ->columnSpanFull(),
                    ])
                    ->label('Customer Addresses')
                    ->addActionLabel('Add Address')
                    ->columns(1),
            ]);
    }
}
