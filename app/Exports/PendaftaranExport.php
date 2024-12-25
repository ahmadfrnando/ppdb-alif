<?php

namespace App\Exports;

use App\Models\Pendaftaran;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PendaftaranExport implements FromQuery, WithHeadings, WithMapping, WithColumnFormatting, ShouldAutoSize
{
    protected $bulanMulai;
    protected $bulanAkhir;

    public function __construct($bulanMulai, $bulanAkhir)
    {
        $this->bulanMulai = $bulanMulai;
        $this->bulanAkhir = $bulanAkhir;
    }

    public function query()
    {
        return Pendaftaran::query()
            ->whereMonth('created_at', '>=', $this->bulanMulai)
            ->whereMonth('created_at', '<=', $this->bulanAkhir);
    }

    public function headings(): array
    {
        return [
            'Nama Siswa',
            'Tempat, Tanggal Lahir',
            'Agama',
            'Warga Negara',
            'Jumlah Saudara',
            'Anak Ke',
            'Nama Ayah',
            'Pendidikan Ayah',
            'Pekerjaan Ayah',
            'Nama Wali',
            'Pendidikan Ibu',
            'Pekerjaan Ibu',
            'Nama Wali',
            'Pendidikan Wali',
            'Pekerjaan Wali',
            'Alamat',
            'Nomor Telpon',
            'Email',
            'Daftar Pada',
            'Status',
            'Jarak Rumah Ke Sekolah',
        ];
    }

    public function map($pendaftaran): array
    {
        return [
            $pendaftaran->nama_siswa,
            $pendaftaran->ttl,
            $pendaftaran->agama,
            $pendaftaran->warga_negara,
            $pendaftaran->jlh_saudara,
            $pendaftaran->anak_ke,
            $pendaftaran->nama_ayah,
            $pendaftaran->pendidikan_ayah,
            $pendaftaran->pekerjaan_ayah,
            $pendaftaran->nama_ibu,
            $pendaftaran->pendidikan_ibu,
            $pendaftaran->pekerjaan_ibu,
            $pendaftaran->nama_wali,
            $pendaftaran->pendidikan_wali,
            $pendaftaran->pekerjaan_wali,
            $pendaftaran->alamat,
            $pendaftaran->telp,
            $pendaftaran->email,
            $pendaftaran->created_at,
            $pendaftaran->zonasi,
            $pendaftaran->jarak,
        ];
    }

    public function columnFormats(): array
    {
        return [
            'T' => NumberFormat::FORMAT_DATE_DDMMYYYY,
        ];
    }
}
