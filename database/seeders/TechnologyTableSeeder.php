<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Portfolio;
use App\Models\Technology;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = Technology::factory()->count(10)->create();

        foreach ( $technologies as $technology){
        $portfolios = Portfolio :: inRandomOrder() -> limit(rand(1, 5)) -> get();

        $technology -> portfolios() -> attach($portfolios);
        }
    }
}
