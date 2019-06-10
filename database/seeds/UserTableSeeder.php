<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create admin user
        factory(App\User::class)->create(['name'=> 'admin',
                                          'email'=> 'admin@admin.com',
                                          'password'=> bcrypt('12345678')]);
        factory(App\User::class, 3)->create();
    }
}
