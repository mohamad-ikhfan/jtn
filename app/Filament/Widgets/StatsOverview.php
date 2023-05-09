<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Income', 'Rp. 0'),

            Card::make('Bills Not Paid', '0'),

            Card::make('Bills Paid', '0'),

            Card::make('Customers', '0'),
        ];
    }
}