<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Portfolio;
use App\Models\Type;

class PortfolioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $portfolios = Portfolio :: factory() -> count(10) -> make();
        foreach($portfolios as $portfolio) {
            $type = Type :: inRandomOrder() -> first();

            $portfolio -> type_id = $type -> id;
            $portfolio -> save();
        }
    }
}
