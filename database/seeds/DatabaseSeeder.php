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

        $this->call(AmenitiesTableAutoSeeder::class);
        $this->call(BuildingsTableAutoSeeder::class);
        $this->call(ApartmentAmenitiesTableAutoSeeder::class);
        $this->call(ApartmentImagesTableAutoSeeder::class);
        $this->call(ApartmentsTableAutoSeeder::class);
        $this->call(BuildingAmenitiesTableAutoSeeder::class);
        $this->call(BuildingImagesTableAutoSeeder::class);
        $this->call(ConfigsTableAutoSeeder::class);
        $this->call(SlidersTableAutoSeeder::class);
        $this->call(UsersTableAutoSeeder::class);
        $this->call(ApartmentFeaturesTableAutoSeeder::class);
        $this->call(ProjectsTableAutoSeeder::class);
        $this->call(ProjectImagesTableAutoSeeder::class);
        $this->call(HousesTableAutoSeeder::class);
        $this->call(HouseImagesTableAutoSeeder::class);
        $this->call(ArticlesTableAutoSeeder::class);
        $this->call(ArticleImagesTableAutoSeeder::class);
    }
}
