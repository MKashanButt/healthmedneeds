<?php

namespace App\Filament\Resources\ReshapeMedicalEquipmentResource\Pages;

use App\Filament\Resources\ReshapeMedicalEquipmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListReshapeMedicalEquipment extends ListRecords
{
    protected static string $resource = ReshapeMedicalEquipmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
