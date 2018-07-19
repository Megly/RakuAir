<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 250; $i++) {
        DB::table('users')->insert([
            'name' => str_random(10),
            'password' => bcrypt('secret'),
            'team' => rand(1,45),
            'sex' => rand(0,1),
            'size' => rand(0,2),
            'feel' => rand(-6,6),
        
        ]);
    }
}
}
