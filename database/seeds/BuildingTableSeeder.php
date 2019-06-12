<?php

use Illuminate\Database\Seeder;
use App\Building;

class BuildingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buildings = factory(App\Building::class, 30)->create();
    }
}
