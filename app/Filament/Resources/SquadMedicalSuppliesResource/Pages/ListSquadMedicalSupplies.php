<?php

namespace App\Filament\Resources\SquadMedicalSuppliesResource\Pages;

use App\Filament\Resources\SquadMedicalSuppliesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSquadMedicalSupplies extends ListRecords
{
    protected static string $resource = SquadMedicalSuppliesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
