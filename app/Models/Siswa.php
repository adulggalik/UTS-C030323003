<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    // Specify the table name if it differs from the default plural form
    protected $table = 'siswas'; // Optional

    // Specify the fillable fields
    protected $fillable = [
        'nama',
        'tanggal_lahir',
        'alamat',
        'telepon',
        'email',
        'jenis_kelamin',
    ];
}
