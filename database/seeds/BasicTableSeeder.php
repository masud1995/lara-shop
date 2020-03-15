<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BasicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('basics')->insert([
            'name' => 'Twins Tech Shop',
            'contact_no'=> '01850459877',
            'phone'=> '1478965412',
            'bkas'=> '01852236547',
            'logo'=> '',
            'website'=> 'wwww.twinstechbd.com',
            'delivery_cost1'=> '50',
            'delivery_cost2'=> '60',
            'inside_details' => 'demo',
            'outside_details' =>'demo',
            'header_code'=>'Twins Tech Shop',
            'footer_code'=>'copyrightⒸTwinsTech',
            
        ]);
        
    
    }
}
