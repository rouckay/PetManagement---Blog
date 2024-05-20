<?php

namespace App\Filament\Widgets;

use App\Models\Patient;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PatientTypeOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Cats', Patient::query()->where('type', 'cat')->count()),
            Stat::make('Dog', Patient::query()->where('type', 'dog')->count()),
            Stat::make('Prabo', Patient::query()->where('type', 'prabo')->count()),
        ];
    }
}
