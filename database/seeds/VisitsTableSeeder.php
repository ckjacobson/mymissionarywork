<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class VisitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visits')->insert([
        	'household_id' => 1, //Douglas
            'contact_date' => Carbon::parse('2018-10-30'),
            'creator_id' => '1',
            'note' => 'We spoke with Chris on the doorstep. Chris and Francesca are a married couple with 2 kids and another on the way (due May 29). I think he said they have a 5 year old daughter and 4 year old son, whose name is Blis. They’ve broken previous appointments because his wife has been in and out of the hospital due to pregnancy complications. Chris was born a member but left the church around 17. His parents were separated; his dad was excommunicated; his mom was no support. His wife left the church when she was 9. He has a bunch of piercings in his face, gauges in his ears, at least 1 tattoo on his arm, and long hair. Despite his rough appearance he seemed genuinely anxious to return to the church. We shared the location and time along with the missionaries phone number, Cameron’s phone number, and Bishop Sanders phone number (because Chris requested it). He said they would come to church. The missionaries shared a brief message/testimony about God still loving and being proud of Chris for his desire to return to the church. They have lived in the 2200 W apartments for ~5 months. Chris said the best time to find them at home was between 5–6pm.',
            'created_at' => date("Y-m-d H:i:s"),
    	]);
        DB::table('visits')->insert([
        	'household_id' => 1, //Douglas
            'contact_date' => Carbon::parse('2018-11-04'),
            'creator_id' => '1',
            'note' => 'The whole family attended sacrament meeting. Met with the bishop immediately after. RS, EQ, and Evans scheduled to meet with them during the week.',
            'created_at' => date("Y-m-d H:i:s"),
    	]);	
        DB::table('visits')->insert([
        	'household_id' => 2, //Douglas
            'contact_date' => Carbon::parse('2018-11-06'),
            'creator_id' => '1',
            'note' => 'Visited with Mike on his doorstep. Mike is a middle aged man in his late fifties or early sixties. He used to run a landscaping business with his twin for more than a decade. He has been married twice. His current marriage to Julie has been going for 1.5 years. They have lived in the 2200 W apartments for 4 months. He has been running a backhoe, but will begin a new job at Sam’s Club selling phones and cable TV. Julie recently started working at BigLots. He is very open and conversant. He has been trying to give up smoking. He gave up drinking and has been sober for a month or more. He said that he has started to dislike smoking since giving up drinking. He’s definitely on the rebound and is sorry for the past decisions he’s made that has caused him to lose so much. The missionaries shared a scripture and bore testimony. I shared my testimony about the love that God has for us, and how proud He is when we do the little things, like prayer and scripture study, to feel of his love.',
            'created_at' => date("Y-m-d H:i:s"),
    	]);	 
        DB::table('visits')->insert([
            'household_id' => 2, //Douglas
            'contact_date' => Carbon::parse('2018-11-01'),
            'creator_id' => '2',
            'note' => 'Visited with Mike on his doorstep. Invited to church.',
            'created_at' => date("Y-m-d H:i:s"),
        ]); 
    }
}
