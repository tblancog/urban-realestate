<?php

use Illuminate\Database\Seeder;

class UsersTableAutoSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => '1',
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$CLnxNJc.xVszku21.Niet.MYqzLoUC5vKxsoDnH5ACcc/g4e4mdDa',
                'type' => 'user',
                'bio' => NULL,
                'photo' => 'profile.png',
                'remember_token' => '4Mr2fddRezwVmM5KLHvJfP4kojOlLlHmT5OAwox2ONI9eRmDUtpuRSleW8p1',
                'created_at' => '2019-07-18 09:54:22',
                'updated_at' => '2019-07-18 09:54:22',
            ),
            1 => 
            array (
                'id' => '2',
                'name' => 'Verda Frami III',
                'email' => 'alford07@example.org',
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',
                'type' => 'user',
                'bio' => NULL,
                'photo' => 'profile.png',
                'remember_token' => 'NMGYc6N2d1',
                'created_at' => '2019-07-18 09:54:22',
                'updated_at' => '2019-07-18 09:54:22',
            ),
            2 => 
            array (
                'id' => '3',
                'name' => 'Miss Maddison Schmeler',
                'email' => 'sporer.rosalind@example.org',
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',
                'type' => 'user',
                'bio' => NULL,
                'photo' => 'profile.png',
                'remember_token' => 'WHUltFR68T',
                'created_at' => '2019-07-18 09:54:22',
                'updated_at' => '2019-07-18 09:54:22',
            ),
            3 => 
            array (
                'id' => '4',
                'name' => 'Dorothea Robel',
                'email' => 'alfonso47@example.org',
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',
                'type' => 'user',
                'bio' => NULL,
                'photo' => 'profile.png',
                'remember_token' => 'XbKuvZAnNl',
                'created_at' => '2019-07-18 09:54:22',
                'updated_at' => '2019-07-18 09:54:22',
            ),
        ));
        
        
    }
}