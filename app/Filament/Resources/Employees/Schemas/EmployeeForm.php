<?php

namespace App\Filament\Resources\Employees\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class EmployeeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('position_id')
                    ->required()
                    ->numeric(),
                TextInput::make('user_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('dni')
                    ->required(),
                TextInput::make('first_name')
                    ->required(),
                TextInput::make('last_name')
                    ->required(),
                TextInput::make('phone')
                    ->tel()
                    ->default(null),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->default(null),
                TextInput::make('address')
                    ->default(null),
                DatePicker::make('birth_date'),
                TextInput::make('salary')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                Toggle::make('status')
                    ->required(),
            ]);
    }
}
