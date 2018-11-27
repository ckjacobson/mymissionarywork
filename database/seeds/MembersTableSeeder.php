<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'household_id' => 1,
            'name' => 'Chris',
            'relationship' => 'Father',
            'DOB' => Carbon::parse('1993-04-01'), //4-1-93
            'status' => 'Less Active',
            'phone' =>  8013197595,
            'created_at' => date("Y-m-d H:i:s"),
    	]);
        DB::table('members')->insert([
            'household_id' => 1,
            'name' => 'Francesca',
            'relationship' => 'Mother',
            'DOB' => Carbon::parse('1993-06-06'), //6-6-93
            'status' => 'Less Active',
            'phone' =>  8014482307,
            'created_at' => date("Y-m-d H:i:s"),
    	]);	
        DB::table('members')->insert([
            'household_id' => 1,
            'name' => 'Blis',
            'relationship' => 'Son',
            'created_at' => date("Y-m-d H:i:s"),
    	]);	
         DB::table('members')->insert([
            'household_id' => 1,
            'name' => 'Izzy',
            'relationship' => 'Daughter',
            'created_at' => date("Y-m-d H:i:s"),
    	]);
        DB::table('members')->insert([
            'household_id' => 2,
            'name' => 'Mike',
            'relationship' => 'Husband',
            'status' => 'Less Active',
            'created_at' => date("Y-m-d H:i:s"),
    	]);	
        DB::table('members')->insert([
            'household_id' => 2,
            'name' => 'Julie',
            'relationship' => 'Wife',
            'status' => 'Less Active',
            'created_at' => date("Y-m-d H:i:s"),
    	]);	    		   		
    }
}
