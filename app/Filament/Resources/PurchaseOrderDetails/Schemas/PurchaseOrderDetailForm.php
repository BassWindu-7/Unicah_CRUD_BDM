<?php

namespace App\Filament\Resources\PurchaseOrderDetails\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PurchaseOrderDetailForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('purchase_order_id')
                    ->required()
                    ->numeric(),
                TextInput::make('product_id')
                    ->required()
                    ->numeric(),
                TextInput::make('quantity')
                    ->required()
                    ->numeric(),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                TextInput::make('subtotal')
                    ->required()
                    ->numeric(),
            ]);
    }
}
