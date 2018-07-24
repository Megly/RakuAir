<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($a = 1; $a <=45; $a++) {
        for ($i = 1; $i <= 6; $i++) {
        DB::table('users')->insert([
            'name' => str_random(10),
            'password' => bcrypt('secret'),
            'team' => $a,
            'sex' => rand(0,1),
            'size' => rand(0,2),
            'feel' => rand(0,6),
        
        ]);};
        }
    }
}
