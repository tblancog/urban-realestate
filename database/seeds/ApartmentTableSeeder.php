<?php

use Illuminate\Database\Seeder;
use App\Apartment;


class ApartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\Apartment::class)->create();
    }
}
