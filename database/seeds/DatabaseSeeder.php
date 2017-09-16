<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

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
        Model::unguard();

        $this->call(RolesTableSeeder::class);
        //$this->call(UserTableSeeder::class);

        Model::reguard();
    }
}
