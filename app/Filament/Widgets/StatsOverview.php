<?php

namespace App\Filament\Widgets;

use App\Models\Pendaftaran;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{   
    protected static ?int $sort = 1;
    protected function getStats(): array
    {
        return [
            Stat::make('Total Pendaftar', Pendaftaran::count()),
            Stat::make('Lulus Zonasi', Pendaftaran::where('zonasi', 'Lulus Zonasi')->count()),
            Stat::make('Tidak Lulus Zonasi', Pendaftaran::where('zonasi', 'Tidak Lulus Zonasi')->count()),
        ];
    }
}
