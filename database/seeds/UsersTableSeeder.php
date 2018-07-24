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
        for ($a = 1; $a <=3; $a++) {
        for ($i = 1; $i <= 6; $i++) {
        DB::table('users')->insert([
            'name' => str_random(10),
            'password' => bcrypt('secret'),
            'team' => $a,
            'sex' => rand(0,1),
            'size' => rand(0,2),
            'feel' => rand(-6,0),
        
        ]);};};
        
        
        for ($a = 10; $a <=13; $a++) {
        for ($i = 1; $i <= 6; $i++) {
        DB::table('users')->insert([
            'name' => str_random(10),
            'password' => bcrypt('secret'),
            'team' => $a,
            'sex' => rand(0,1),
            'size' => rand(0,2),
            'feel' => rand(-6,0),
        
        ]);};};
        
        for ($a = 22; $a <=25; $a++) {
        for ($i = 1; $i <= 6; $i++) {
        DB::table('users')->insert([
            'name' => str_random(10),
            'password' => bcrypt('secret'),
            'team' => $a,
            'sex' => rand(0,1),
            'size' => rand(0,2),
            'feel' => rand(-6,0),
        
        ]);};};
        
        for ($a = 34; $a <=37; $a++) {
        for ($i = 1; $i <= 6; $i++) {
        DB::table('users')->insert([
            'name' => str_random(10),
            'password' => bcrypt('secret'),
            'team' => $a,
            'sex' => rand(0,1),
            'size' => rand(0,2),
            'feel' => rand(-6,0),
        
        ]);};};
        
        for ($a = 14; $a <=21; $a++) {
        for ($i = 1; $i <= 6; $i++) {
        DB::table('users')->insert([
            'name' => str_random(10),
            'password' => bcrypt('secret'),
            'team' => $a,
            'sex' => rand(0,1),
            'size' => rand(0,2),
            'feel' => rand(0,6),
        
        ]);};};
        
        for ($a = 28; $a <=33; $a++) {
        for ($i = 1; $i <= 6; $i++) {
        DB::table('users')->insert([
            'name' => str_random(10),
            'password' => bcrypt('secret'),
            'team' => $a,
            'sex' => rand(0,1),
            'size' => rand(0,2),
            'feel' => rand(0,6),
        
        ]);};};
        

    
    }
}
