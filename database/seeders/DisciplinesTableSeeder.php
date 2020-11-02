<?php

namespace Database\Seeders;

use App\Models\Discipline;

use Illuminate\Database\Seeder;

class DisciplinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $disciplines = [
            ['name' => 'Artes'],
            ['name' => 'Biologia'],
            ['name' => 'Ciências'],
            ['name' => 'Espanhol'],
            ['name' => 'Filosofia'],
            ['name' => 'Física'],
            ['name' => 'Geografia'],
            ['name' => 'História'],
            ['name' => 'Informática'],
            ['name' => 'Inglês'],
            ['name' => 'Matemática'],
            ['name' => 'Português'],
            ['name' => 'Química'],
            ['name' => 'Sociologia'],
        ];

        foreach($disciplines as $discipline) {
            Discipline::firstOrCreate($discipline);
            sleep(1);
        }
    }
}