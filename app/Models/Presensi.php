<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'kelas_id',
        'matkul_id',
        'keterangan',
        'pertemuan',
    ];

    public function kelas()
    {
        return $this->hasMany(Kelas::class);
    }

    public function matkuls()
    {
        return $this->hasMany(Matkul::class);
    }

    public function Users()
    {
        return $this->hasMany(User::class);
    }
}
