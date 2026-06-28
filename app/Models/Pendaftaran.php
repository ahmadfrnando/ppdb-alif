<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pendaftaran extends Model
{   
    use HasFactory;

    protected $table = 'pendaftaran';

    protected $guarded = [];

    protected static function booted(): void
    {
        static::creating(function (Pendaftaran $pendaftaran) {
            // Hanya isi kalau schedule_id masih kosong
            if (empty($pendaftaran->schedule_id)) {
                
                $activeSchedule = Schedule::active()->first();

                if ($activeSchedule) {
                    $pendaftaran->schedule_id = $activeSchedule->id;
                } else {
                    // Opsional: bisa throw error kalau tidak ada schedule aktif
                    throw new \Exception('Tidak ada schedule yang aktif saat ini.');
                }
            }
        });
    }

    public function schedule(): BelongsTo
    {
        return $this->belongsTo(Schedule::class);
    }
}