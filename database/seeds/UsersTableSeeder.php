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
        
        // cold teams
        $coldteam = array(1,2,3,10,11,12,13,22,23,24,25,34,35,36,37,41,45); //17teams
        
        foreach ($coldteam as $a) {
        for ($i = 1; $i <= 6; $i++) {
        DB::table('users')->insert([
            'name' => str_random(10),
            'password' => bcrypt('secret'),
            'team' => $a,
            'sex' => rand(0,1),
            'size' => rand(0,2),
            'feel' => rand(-6,0),
        
        ]);};};
        
        //hot teams 
        
        $hotteam = array(14,15,16,17,18,19,20,21,28,29,30,31,32,33,38,39,42,43); //19teams 
        
        foreach ($hotteam as $a) {
        for ($i = 1; $i <= 6; $i++) {
        DB::table('users')->insert([
            'name' => str_random(10),
            'password' => bcrypt('secret'),
            'team' => $a,
            'sex' => rand(0,1),
            'size' => rand(0,2),
            'feel' => rand(0,6),
        
        ]);};};
        

        //comfrotable teams
        
        $comteam = array(4,5,6,7,8,9,26,27,40,44); //10teams
        
        foreach ($coldteam as $a) {
        for ($i = 1; $i <= 6; $i++) {
        DB::table('users')->insert([
            'name' => str_random(10),
            'password' => bcrypt('secret'),
            'team' => $a,
            'sex' => rand(0,1),
            'size' => rand(0,2),
            'feel' => 0,
        
        ]);};};

    
    
    }
}
