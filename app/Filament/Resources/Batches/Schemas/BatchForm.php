<?php

namespace App\Filament\Resources\Batches\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class BatchForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('code'),
                Select::make('source_type')
                    ->options(['purchase' => 'Purchase', 'hatching' => 'Hatching', 'opening' => 'Opening'])
                    ->default('opening')
                    ->required(),
                Toggle::make('is_opening')
                    ->required(),
                DatePicker::make('start_date'),
                DatePicker::make('opening_date'),
                TextInput::make('initial_quantity')
                    ->required()
                    ->numeric(),
                TextInput::make('current_quantity')
                    ->required()
                    ->numeric(),
                TextInput::make('opening_cost')
                    ->numeric()
                    ->prefix('$'),
                Select::make('status')
                    ->options(['active' => 'Active', 'closed' => 'Closed'])
                    ->default('active')
                    ->required(),
                Textarea::make('notes')
                    ->columnSpanFull(),
            ]);
    }
}
