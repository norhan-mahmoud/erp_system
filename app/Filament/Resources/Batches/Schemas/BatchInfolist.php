<?php

namespace App\Filament\Resources\Batches\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class BatchInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('code')
                    ->placeholder('-'),
                TextEntry::make('source_type')
                    ->badge(),
                IconEntry::make('is_opening')
                    ->boolean(),
                TextEntry::make('start_date')
                    ->date()
                    ->placeholder('-'),
                TextEntry::make('opening_date')
                    ->date()
                    ->placeholder('-'),
                TextEntry::make('initial_quantity')
                    ->numeric(),
                TextEntry::make('current_quantity')
                    ->numeric(),
                TextEntry::make('opening_cost')
                    ->money()
                    ->placeholder('-'),
                TextEntry::make('status')
                    ->badge(),
                TextEntry::make('notes')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
