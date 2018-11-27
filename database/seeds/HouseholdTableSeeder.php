<?php

use Illuminate\Database\Seeder;

class HouseholdTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('households')->insert([
            'name' => 'Douglas',
            'address' => '2200 W Apt #6',
            'phone' => 8013197595,
            'created_at' => date("Y-m-d H:i:s"),
    	]);
        DB::table('households')->insert([
            'name' => '', //Zairi
            'address' => '2200 W Apt #15',
            'created_at' => date("Y-m-d H:i:s"),
    	]);
        DB::table('households')->insert([
            'name' => '', //Jennifer, Antonio, Omar, Fernando
            'address' => '2559 W 7130 S',
            'created_at' => date("Y-m-d H:i:s"),
    	]);        	
    }
}
