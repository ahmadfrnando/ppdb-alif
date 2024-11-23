<?php

namespace App\Filament\Resources\PendaftaranResource\Pages;

use App\Filament\Resources\PendaftaranResource;
use Filament\Actions;
use Filament\Forms\Components\Select;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Enums\MaxWidth;

class ListPendaftarans extends ListRecords
{
    protected static string $resource = PendaftaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\Action::make('export_to_excel'),
            Actions\Action::make('export_to_excel')
                ->modalWidth(MaxWidth::Large)
                ->color('success')
                ->icon('heroicon-s-printer')
                ->form([
                    Select::make('bulan_mulai')->options([
                        1 => 'Januari',
                        2 => 'Februari',
                        3 => 'Maret',
                        4 => 'April',
                        5 => 'Mei',
                        6 => 'Juni',
                        7 => 'Juli',
                        8 => 'Agustus',
                        9 => 'September',
                        10 => 'Oktober',
                        11 => 'November',
                        12 => 'Desember',
                    ]),
                    Select::make('bulan_akhir')->options([
                        1 => 'Januari',
                        2 => 'Februari',
                        3 => 'Maret',
                        4 => 'April',
                        5 => 'Mei',
                        6 => 'Juni',
                        7 => 'Juli',
                        8 => 'Agustus',
                        9 => 'September',
                        10 => 'Oktober',
                        11 => 'November',
                        12 => 'Desember',
                    ])
                ])
                ->action(function (array $data) {
                    // Eksekusi logika setelah form disubmit
                    $bulanMulai = $data['bulan_mulai'];
                    $bulanAkhir = $data['bulan_akhir'];
                    // Redirect ke route yang ditentukan dengan parameter tanggal
                    return redirect()->route('pendaftaran.export', [
                        'bulan_mulai' => $bulanMulai,
                        'bulan_akhir' => $bulanAkhir,
                    ]);
                })
            ];
    }
}
