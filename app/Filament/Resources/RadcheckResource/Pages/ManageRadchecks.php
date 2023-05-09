<?php

namespace App\Filament\Resources\RadcheckResource\Pages;

use App\Filament\Resources\RadcheckResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageRadchecks extends ManageRecords
{
    protected static string $resource = RadcheckResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
