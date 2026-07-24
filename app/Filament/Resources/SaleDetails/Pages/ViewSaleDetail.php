<?php

namespace App\Filament\Resources\SaleDetails\Pages;

use App\Filament\Resources\SaleDetails\SaleDetailResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSaleDetail extends ViewRecord
{
    protected static string $resource = SaleDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
