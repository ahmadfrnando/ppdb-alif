<?php

namespace App\Filament\Widgets;

use App\Models\Pendaftaran;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class ListPendaftaranWidget extends BaseWidget
{   
    protected static ?int $sort = 5;
    public function table(Table $table): Table
    {
        return $table
            ->query(
                Pendaftaran::query()
            )
            ->columns([
                Tables\Columns\TextColumn::make('nama_siswa'),
                Tables\Columns\TextColumn::make('zonasi')
                ->label('Status') // Label untuk kolom status
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    'Lulus Zonasi' => 'success',
                    'Tidak Lulus Zonasi' => 'danger',
                    default => 'secondary', // Warna default
                }),
            ]);
    }
}
