<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Event;

class Pendaftaran extends Model
{
    protected $fillable = [
        'user_id',
        'event_id',
        'nama_peserta',
        'no_hp',
        'alamat',
        'nama_sekolah',
        'tingkatan_sekolah',
        'status',
    ];

    // Relasi ke event
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}