<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'siswa_id',
        'jurusan_id',
    ];

    // Relasi dengan model Siswa dan Jurusan
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }
}
