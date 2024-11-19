<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Especialidade;

class EspecialidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Especialidade::insert([
            [
                'id' => 1,
                'nome' => 'Animais pequenos',
            ],
            [
                'id' => 2,
                'nome' => 'Animais grandes',
            ],
            [
                'id' => 3,
                'nome' => 'Animais exóticos',
            ]
        ]);
    }
}
