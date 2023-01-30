<?php

use Illuminate\Database\Seeder;

class SiteMetasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('site_metas')->delete();
        
        \DB::table('site_metas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'meta_key' => 'settings',
                'meta_value' => '{"site_name":"NAFAU","email":"info@coffee.nacmu.org","contact_no":"0700107900","location":"kalagala-kangulumira","twitter":"https:\\/\\/www.twitter.com\\/nafau","facebook":"https:\\/\\/www.facebook.com\\/nafau","linkedin":"https:\\/\\/www.linkedin.com\\/account","frontend_website":1}',
                'created_at' => '2022-06-25 13:31:31',
                'updated_at' => '2022-08-23 08:57:50',
            ),
        ));
        
        
    }
}