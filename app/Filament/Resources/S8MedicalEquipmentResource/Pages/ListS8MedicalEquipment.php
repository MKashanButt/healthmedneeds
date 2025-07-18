<?php

namespace App\Filament\Resources\S8MedicalEquipmentResource\Pages;

use App\Filament\Resources\S8MedicalEquipmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListS8MedicalEquipment extends ListRecords
{
    protected static string $resource = S8MedicalEquipmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
