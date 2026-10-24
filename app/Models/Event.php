<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pendaftaran;

class Event extends Model
{
    
    protected $fillable = [
        'nama_event',
        'kategori',
        'tanggal',
        'lokasi',
        'deskripsi',
        'kuota',
        'jenis',
        'tingkatan',
        'poster',
        'proposal',
        'peraturan',
    ];
    
    public function pendaftarans()
{
    return $this->hasMany(Pendaftaran::class);
}
}