<?php

namespace App\Filament\Resources\Payments\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PaymentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('sale_id')
                    ->required()
                    ->numeric(),
                Select::make('method')
                    ->options(['Efectivo' => 'Efectivo', 'Tarjeta' => 'Tarjeta', 'Transferencia' => 'Transferencia'])
                    ->required(),
                TextInput::make('amount')
                    ->required()
                    ->numeric(),
                DateTimePicker::make('payment_date')
                    ->required(),
            ]);
    }
}
