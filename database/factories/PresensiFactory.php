<?php

namespace Database\Factories;

use App\Models\Matkul;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\presensi>
 */
class PresensiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'user_id' => random_int(1,50),
            'matkul_id' => random_int(1,5),
            'kelas_id' => random_int(1,3),
        ];
    }
}
