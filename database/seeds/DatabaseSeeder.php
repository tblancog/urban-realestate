<?php

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(AmenitiesTableAutoSeeder::class);
        // $this->call(BuildingsTableAutoSeeder::class);
        // $this->call(ApartmentsTableAutoSeeder::class);
        // $this->call(SlidersTableAutoSeeder::class);
        // $this->call(ConfigsTableAutoSeeder::class);
        $this->call(UsersTableAutoSeeder::class);
        // $this->call(BuildingAmenitiesTableAutoSeeder::class);
        // $this->call(BuildingImagesTableAutoSeeder::class);
        // $this->call(ApartmentAmenitiesTableAutoSeeder::class);
        // $this->call(ApartmentImagesTableAutoSeeder::class);
        // $this->call(PasswordResetsTableAutoSeeder::class);
    }
}
