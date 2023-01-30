<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionTableSeeder::class);
        $this->call(UsersTableSeeder::class);
       $this->call(SlidersTableSeeder::class);
        $this->call(EducationTableSeeder::class);
        $this->call(EntriesTableSeeder::class);
        $this->call(TestimonialsTableSeeder::class);
        $this->call(SiteMetasTableSeeder::class);
    }
}
