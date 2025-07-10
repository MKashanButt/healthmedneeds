<?php

namespace App\Filament\Resources\FormResource\Pages;

use App\Filament\Resources\FormResource;
use App\Imports\FormImport;
use Filament\Actions;
use Filament\Actions\ImportAction;
use Filament\Actions\Imports\Models\Import;
use Filament\Resources\Pages\ListRecords;

class ImportForm extends ListRecords
{
    protected static string $resource = FormResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ImportAction::make()
                ->label('Import Excel')
                ->color('primary')
                ->use(FormImport::class),
        ];
    }
}
