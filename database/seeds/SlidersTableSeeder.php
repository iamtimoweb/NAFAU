<?php

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sliders')->delete();
        
        \DB::table('sliders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Noah\'s Ark Farmers Association Uganda',
            'txt' => 'Noah\'s Ark Farmers Association Uganda is a nonprofit, membership-based organization with members having small scale farms (less than 25 acres each) managed mainly by themselves and their families with focus farm commodity being coffee',
                'image' => '1661176657.jpg',
                'is_active' => 1,
                'user_id' => 1,
                'created_at' => '2022-08-22 16:57:37',
                'updated_at' => '2022-08-22 16:57:37',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Trade And Marketing',
                'txt' => 'Our coffee marketing strategy communicates an origin brand message to our members. We work with them, perform public relations activities, organize field events and missions or area coffee festivals.',
                'image' => '1661177538.jpg',
                'is_active' => 1,
                'user_id' => 1,
                'created_at' => '2022-08-22 17:06:48',
                'updated_at' => '2022-08-22 17:12:18',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'New Horizon Community School',
            'txt' => 'Noah\'s Ark Farmers Association Uganda in partnership with Noah\'s Ark Children Ministry Uganda have just started a New Horizon School to provide quality education in the community. we collect school dues from the coffee that is brought in from the parents helping them (farmers) not to feel the burden of paying school dues at once.',
                'image' => '1661178156.jpg',
                'is_active' => 1,
                'user_id' => 1,
                'created_at' => '2022-08-22 17:22:37',
                'updated_at' => '2022-08-22 17:24:11',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Organic Farming',
                'txt' => 'We practice an integrated farming approach which allows no synthetic chemicals, fertilizers, or pesticides to be used during the cultivation or production processes. Our organic farm is managed as the working ecosystem it is, and our farmers employ techniques such as composting, terracing, and natural pest control that are often produced on the farm.',
                'image' => '1661178756.jpg',
                'is_active' => 1,
                'user_id' => 1,
                'created_at' => '2022-08-22 17:32:37',
                'updated_at' => '2022-08-22 17:36:28',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Youth Programs',
                'txt' => 'Noah\'s Ark Farmers Association Uganda, and its partners are building a more proactive, communicating, engaging and empathetic generation of young, bright and talented people around the community who are able to tackle the problems of tomorrow with conviction and purpose.',
                'image' => '1661179621.jpg',
                'is_active' => 1,
                'user_id' => 1,
                'created_at' => '2022-08-22 17:47:01',
                'updated_at' => '2022-08-22 17:47:01',
            ),
        ));
        
        
    }
}