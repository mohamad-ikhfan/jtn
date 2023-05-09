<?php

namespace App\Filament\Resources\RadgroupreplyResource\Pages;

use App\Filament\Resources\RadgroupreplyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageRadgroupreplies extends ManageRecords
{
    protected static string $resource = RadgroupreplyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
