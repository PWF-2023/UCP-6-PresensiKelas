<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function presensis()
    {
        return $this->hasMany(Presensi::class);
    }
}
