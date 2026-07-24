<?php

namespace App\Filament\Resources\EmployeePositions\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class EmployeePositionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('description')
                    ->default(null),
            ]);
    }
}
