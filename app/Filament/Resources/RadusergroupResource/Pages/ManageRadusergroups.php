<?php

namespace App\Filament\Resources\RadusergroupResource\Pages;

use App\Filament\Resources\RadusergroupResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageRadusergroups extends ManageRecords
{
    protected static string $resource = RadusergroupResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
