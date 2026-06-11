<?php

namespace App\Filament\Resources\Assets\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class AssetInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('purchase_value')
                    ->numeric(),
                TextEntry::make('salvage_value')
                    ->numeric(),
                TextEntry::make('useful_life_months')
                    ->numeric(),
                TextEntry::make('purchase_date')
                    ->date(),
                TextEntry::make('start_date')
                    ->date(),
                TextEntry::make('accumulated_depreciation')
                    ->numeric(),
                IconEntry::make('is_opening')
                    ->boolean(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
