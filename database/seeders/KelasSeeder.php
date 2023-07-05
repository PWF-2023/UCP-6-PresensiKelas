<?php

namespace Database\Seeders;

use App\Models\kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        kelas::create([
            'name' => 'A'
        ]);

        kelas::create([
            'name' => 'B'
        ]);

        kelas::create([
            'name' => 'C'
        ]);
    }
}
