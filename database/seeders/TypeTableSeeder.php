<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Type;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['Java', 'Php', 'JavaScript', 'C', 'C++'];

        foreach ($types as $type) {

            Type::create([
                "main_programming_language" => $type
            ]);
        }
    }
}
