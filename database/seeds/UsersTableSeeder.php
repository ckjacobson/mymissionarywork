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
        DB::table('users')->insert([
            'name' => 'Cameron Jacobson',
            'email' => 'cameron.jacobson@gmail.com',
            'password' => Hash::make('test'),
            'organization' => 'Ward Mission Leader',
            'abbreviation' => 'WML',
            'created_at' => date("Y-m-d H:i:s"),
    	]);
       DB::table('users')->insert([
            'name' => 'Brandon Crowther',
            'email' => 'brandoncrowther@gmail.com',
            'password' => Hash::make('test'),
            'organization' => 'Elders Quorum',
            'abbreviation' => 'EQ',
            'created_at' => date("Y-m-d H:i:s"),
    	]);
       DB::table('users')->insert([
            'name' => 'Ronda Love',
            'email' => 'rondajlove@gmail.com',
            'password' => Hash::make('test'),
            'organization' => 'Relief Society',
            'abbreviation' => 'RS',
            'created_at' => date("Y-m-d H:i:s"),
    	]);
       DB::table('users')->insert([
            'name' => 'Russ Evans',
            'email' => 'revans@xmission.com',
            'password' => Hash::make('test'),
            'organization' => 'Senior Missionaries',
            'abbreviation' => 'SM',
            'created_at' => date("Y-m-d H:i:s"),
    	]);
       DB::table('users')->insert([
            'name' => 'Wayne Sanders',
            'email' => 'wj27thward@gmail.com',
            'password' => Hash::make('test'),
            'organization' => 'Bishopric',
            'abbreviation' => 'BP',
            'created_at' => date("Y-m-d H:i:s"),
    	]);
    }
}
