<?php

use Illuminate\Database\Seeder;

class TestimonialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('testimonials')->delete();
        
        \DB::table('testimonials')->insert(array (
            0 => 
            array (
                'created_at' => '2022-06-09 09:16:04',
                'id' => 1,
                'image' => '1658054200.jpg',
                'member' => 'Naigwe Betty',
                'testimony' => 'i have been taught best practices of coffee farming, i only pick red coffee beans from the coffee plant, with this i have benefited as a coffee farmer, my grand children now attend school from New Horizon Community School through the provison of coffee as school fees.',
                'updated_at' => '2022-08-06 08:09:49',
                'user_id' => 1,
            ),
            1 => 
            array (
                'created_at' => '2022-06-09 09:16:38',
                'id' => 2,
                'image' => '1658054183.jpg',
                'member' => 'Wasswa',
                'testimony' => 'i have been taught best practices of coffee farming, i now pick only the red coffee berries from the plant and i have learnt how make my own organic fertilizer. My children now go to school at new horizon community school through just the provision of coffee.',
                'updated_at' => '2022-08-06 08:08:10',
                'user_id' => 1,
            ),
            2 => 
            array (
                'created_at' => '2022-06-09 09:16:58',
                'id' => 3,
                'image' => '1658054166.jpg',
                'member' => 'Peter Mwebaza',
                'testimony' => 'i have been taught best practices of coffee farming and managed to learn the agriculture know how through exchange, observation, practical exercises and experiments. my children go to school at New Horizon Community School through provision of coffee and i have managed to benefit as a coffee farmer by the good prices offered.',
                'updated_at' => '2022-08-06 08:10:28',
                'user_id' => 1,
            ),
            3 => 
            array (
                'created_at' => '2022-07-18 11:24:59',
                'id' => 4,
                'image' => '1658132783.jpg',
                'member' => 'Nalukwago Hawa',
                'testimony' => 'i have been taught best practices of coffee farming, i pick only red coffee berries from the coffee plant. My children study well from New Horizon Community School without being sent away up to when i provide coffee for their school fees.',
                'updated_at' => '2022-08-06 08:05:47',
                'user_id' => 1,
            ),
            4 => 
            array (
                'created_at' => '2022-07-18 11:47:21',
                'id' => 5,
                'image' => '1658134040.jpg',
                'member' => 'Muteesi Agnes',
                'testimony' => 'I have been taught best practices of coffee farming, i pick only red coffee berries from the plant and even when dried up, there is a possibility of taking coffee to the hulling factory so that i can sell FAQ. In return i get the coffee husks which i use to mulch my coffee garden. At the end of every year, members get christmas baskets as a sign of appreciation from the association. I get farmer loans and pay back with coffee',
                'updated_at' => '2022-08-06 08:04:24',
                'user_id' => 1,
            ),
        ));
        
        
    }
}