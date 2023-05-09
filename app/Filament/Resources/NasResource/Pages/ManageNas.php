<?php

namespace App\Filament\Resources\NasResource\Pages;

use App\Filament\Resources\NasResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageNas extends ManageRecords
{
    protected static string $resource = NasResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
