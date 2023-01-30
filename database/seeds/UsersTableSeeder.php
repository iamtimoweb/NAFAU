<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'created_at' => '2022-08-18 16:47:42',
                'email' => 'superadmin@coffee.nacmu.org',
                'firstname' => 'Super',
                'id' => 1,
                'image' => NULL,
                'is_active' => 1,
                'lastname' => 'Admin',
                'password' => '$2y$10$yXzsUdUuXDW01AT4icP/vOd7TAJigPpH88cBzFLEjpFUdgLRr1fDy',
                'phone_no' => '0702707107',
                'remember_token' => NULL,
                'updated_at' => '2022-08-18 16:48:00',
            ),
            1 => 
            array (
                'created_at' => '2022-08-18 16:47:42',
                'email' => 'admin@coffee.nacmu.org',
                'firstname' => 'Admin',
                'id' => 2,
                'image' => NULL,
                'is_active' => 1,
                'lastname' => 'User',
                'password' => '$2y$10$CyZCmLHiOoM3reiaaBd6FO6YNSk6wQoKPsp/j7CGucbyp.BGzvAKq',
                'phone_no' => '0772446634',
                'remember_token' => NULL,
                'updated_at' => '2022-08-18 16:48:15',
            ),
        ));
        
        
    }
}