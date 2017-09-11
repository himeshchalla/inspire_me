<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CBSeeder::class);
        $this->call(InspiremePrivileges::class);
        $this->call(InspiremeInterestsSkills::class);
    }
}
