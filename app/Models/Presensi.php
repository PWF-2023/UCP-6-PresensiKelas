<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;

    protected $with =[
        'user',
        'matkul',
        'kelas',
    ];

    protected $fillable = [
        'user_id',
        'kelas_id',
        'matkul_id',
        'keterangan',
        'pertemuan',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function matkul()
    {
        return $this->belongsTo(Matkul::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
