<?php

namespace App\Filament\Resources\S8MedicalEquipmentResource\Pages;

use App\Filament\Resources\S8MedicalEquipmentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditS8MedicalEquipment extends EditRecord
{
    protected static string $resource = S8MedicalEquipmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
