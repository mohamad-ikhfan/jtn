<?php

namespace App\Filament\Resources\RadpostauthResource\Pages;

use App\Filament\Resources\RadpostauthResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageRadpostauths extends ManageRecords
{
    protected static string $resource = RadpostauthResource::class;

    protected function getActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}