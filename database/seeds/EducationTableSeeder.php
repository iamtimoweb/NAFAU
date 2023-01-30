<?php

use Illuminate\Database\Seeder;

class EducationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('education')->delete();

        \DB::table('education')->insert(array (
            0 =>
            array (
                'created_at' => '2022-03-21 09:57:26',
                'education_level' => 'None',
                'id' => 1,
                'updated_at' => '2022-03-21 09:57:26',
                'user_id' => 1,
            ),
            1 =>
            array (
                'created_at' => '2022-03-21 09:57:37',
                'education_level' => 'Primary',
                'id' => 2,
                'updated_at' => '2022-03-21 09:57:37',
                'user_id' => 1,
            ),
            2 =>
            array (
                'created_at' => '2022-03-21 09:57:48',
                'education_level' => 'Secondary',
                'id' => 3,
                'updated_at' => '2022-03-21 09:57:48',
                'user_id' => 1,
            ),
            3 =>
            array (
                'created_at' => '2022-03-21 09:58:01',
                'education_level' => 'Tertiary',
                'id' => 4,
                'updated_at' => '2022-03-21 09:58:01',
                'user_id' => 1,
            ),
            4 =>
            array (
                'created_at' => '2022-03-21 09:58:14',
                'education_level' => 'University',
                'id' => 5,
                'updated_at' => '2022-03-21 09:58:14',
                'user_id' => 1,
            ),
        ));


    }
}
