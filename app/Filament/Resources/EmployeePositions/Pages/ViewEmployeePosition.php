<?php

namespace App\Filament\Resources\EmployeePositions\Pages;

use App\Filament\Resources\EmployeePositions\EmployeePositionResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewEmployeePosition extends ViewRecord
{
    protected static string $resource = EmployeePositionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
