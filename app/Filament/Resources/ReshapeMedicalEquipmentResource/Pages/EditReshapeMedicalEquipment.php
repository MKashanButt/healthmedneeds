<?php

namespace App\Filament\Resources\ReshapeMedicalEquipmentResource\Pages;

use App\Filament\Resources\ReshapeMedicalEquipmentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditReshapeMedicalEquipment extends EditRecord
{
    protected static string $resource = ReshapeMedicalEquipmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
