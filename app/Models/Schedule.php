<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Schedule extends Model
{   
    use HasFactory;
    
    protected $table = 'schedules';

    protected $guarded = [];

    protected $cast = [
        'start_date' => 'date',
        'end_date' => 'date',
        'is_active' => 'boolean',
    ];

    public function scopeIsActive($query)
    {
        return $query->where('is_active', true)->whereDate('start_date', '<=', now())->whereDate('end_date', '>=', now());
    }

    public function siswas(): HasMany
    {
        return $this->hasMany(Pendaftaran::class, 'schedule_id');
    }
}
