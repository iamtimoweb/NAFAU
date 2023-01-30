<?php

use Illuminate\Database\Seeder;

class EntriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('entries')->delete();

        \DB::table('entries')->insert(array (
            0 =>
            array (
                'class_name' => 'nursery',
                'created_at' => '2022-03-22 08:03:11',
                'id' => 1,
                'updated_at' => '2022-03-22 08:03:11',
                'user_id' => 1,
            ),
            1 =>
            array (
                'class_name' => 'primary one',
                'created_at' => '2022-03-22 08:03:20',
                'id' => 2,
                'updated_at' => '2022-03-22 08:03:20',
                'user_id' => 1,
            ),
            2 =>
            array (
                'class_name' => 'primary two',
                'created_at' => '2022-03-22 08:03:29',
                'id' => 3,
                'updated_at' => '2022-03-22 08:03:29',
                'user_id' => 1,
            ),
            3 =>
            array (
                'class_name' => 'primary three',
                'created_at' => '2022-03-22 08:03:38',
                'id' => 4,
                'updated_at' => '2022-03-22 08:03:38',
                'user_id' => 1,
            ),
        ));


    }
}
