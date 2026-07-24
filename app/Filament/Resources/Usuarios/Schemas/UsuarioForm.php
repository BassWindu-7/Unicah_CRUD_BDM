<?php

namespace App\Filament\Resources\Usuarios\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class UsuarioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('role_id')
                    ->required()
                    ->numeric(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                DateTimePicker::make('email_verified_at'),
                TextInput::make('password')
                    ->password()
                    ->required(),
                Toggle::make('status')
                    ->required(),
            ]);
    }
}
