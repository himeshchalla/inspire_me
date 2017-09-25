<?php

use Illuminate\Database\Seeder;

class InspiremePrivileges extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Please wait updating user privileges and dummy users data...');
        
        $this->call('CmsprivilegesSeeder');
        $this->call('CmsPrivilegesRolesSeeder');
        $this->call('CmsUsersSeeder');
        
        $this->command->info('Updating user privileges and dummy users data completed !');
    }
}

class CmsprivilegesSeeder extends Seeder {

    public function run()
    {
        $this->command->info('Creating user roles for the system...');
        if(DB::table('cms_privileges')->where('name','Admin')->count() == 0) {
            DB::table('cms_privileges')->insert([
                'name'          =>'Admin',
                'is_superadmin' =>NULL,
                'theme_color'   =>'skin-blue',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => NULL
            ]);
        }
        if(DB::table('cms_privileges')->where('name','System user')->count() == 0) {
            DB::table('cms_privileges')->insert([
                'name'          =>'System user',
                'is_superadmin' =>NULL,
                'theme_color'   =>'skin-blue',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => NULL
            ]);
        }
        if(DB::table('cms_privileges')->where('name','Invited')->count() == 0) {
            DB::table('cms_privileges')->insert([
                'name'          =>'Invited',
                'is_superadmin' =>NULL,
                'theme_color'   =>'skin-blue',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => NULL
            ]);
        }
        if(DB::table('cms_privileges')->where('name','Approved')->count() == 0) {
            DB::table('cms_privileges')->insert([
                'name'          =>'Approved',
                'is_superadmin' =>NULL,
                'theme_color'   =>'skin-blue',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => NULL
            ]);
        }
        if(DB::table('cms_privileges')->where('name','Refused')->count() == 0) {
            DB::table('cms_privileges')->insert([
                'name'          =>'Refused',
                'is_superadmin' =>NULL,
                'theme_color'   =>'skin-blue',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => NULL
            ]);
        }
        $this->command->info('Done!!!');
    }
}

class CmsPrivilegesRolesSeeder extends Seeder {

    public function run()
    {
        $this->command->info('Creating user role permissions for the system...');
        $modules = DB::table('cms_moduls')->get();
        $i = 1;
        $roles = DB::table('cms_privileges')->select('id', 'name')->get();
        foreach($roles as $role) {
            foreach($modules as $module) {
                $is_visible = 1;
                $is_create  = 1;
                $is_read    = 1;
                $is_edit    = 1;
                $is_delete  = 1;
                if( (($role->name == 'Invited') || ($role->name == 'Approved')) && ($module->table_name == 'cms_users') ) {
                    DB::table('cms_privileges_roles')->insert([
                        'is_visible'=>$is_visible,
                        'is_create'=>$is_create,
                        'is_edit'=>$is_edit,
                        'is_delete'=>$is_delete,
                        'is_read'=>$is_read,
                        'id_cms_privileges'=>$role->id,
                        'id_cms_moduls'=>$module->id,
                        'created_at'=>date('Y-m-d H:i:s')
                    ]);
                }
                if( ($role->name == 'Admin') || ($role->name == 'System user') ) {
                    switch($module->table_name) {
                        case 'cms_logs':
                            $is_create = 0;
                            $is_edit   = 0;
                            break;
                        case 'cms_privileges_roles':
                            $is_visible = 0;
                            break;
                        case 'cms_apicustom':
                            $is_visible = 0;
                            break;
                        case 'cms_notifications':
                            $is_create = $is_read = $is_edit = $is_delete = 0;
                            break;
                    }

                    DB::table('cms_privileges_roles')->insert([
                        'is_visible'=>$is_visible,
                        'is_create'=>$is_create,
                        'is_edit'=>$is_edit,
                        'is_delete'=>$is_delete,
                        'is_read'=>$is_read,
                        'id_cms_privileges'=>$role->id,
                        'id_cms_moduls'=>$module->id,
                        'created_at'=>date('Y-m-d H:i:s')
                    ]);
                }
            }
        }
        $this->command->info('Done!!!');
    }
}

class CmsUsersSeeder extends Seeder {

    public function run()
    {
        $this->command->info('Creating dummy users for the system...');
        $password = \Hash::make('123456');
        $admin_role_id = DB::table('cms_privileges')->select('id')->where('name', '=', 'Admin')->get();
        $cms_users = DB::table('cms_users')->insert(array(
            'id'                =>DB::table('cms_users')->max('id')+1,
            'name'              => 'Himesh',
            'surname'           => 'Challa',
            'photo'             => NULL,
            'email'             => 'himeshchalla@gmail.com',
            'password'          => $password,
            'birthdate'         => '1980-08-20 00:00:00',
            'country'           => 'India',
            'city'              => 'N/A',
            'id_cms_privileges' => $admin_role_id[0]->id,
            'created_at'        => date('Y-m-d H:i:s'),
            'updated_at'        => NULL,
            'status'            => 'Active',
            'work_start_year'   => 1980,
            'current_company'   => 'This company',
            'user_personal_message' => 'message123',
        ));
        $cms_users = DB::table('cms_users')->insert(array(
            'name'              => 'Nilesh',
            'surname'           => 'Dave',
            'photo'             => NULL,
            'email'             => 'davenilesh@live.com',
            'password'          => $password,
            'birthdate'         => '1990-06-12 00:00:00',
            'country'           => 'India',
            'city'              => 'Rajkot',
            'id_cms_privileges' => $admin_role_id[0]->id,
            'created_at'        => date('Y-m-d H:i:s'),
            'updated_at'        => NULL,
            'status'            => 'Active',
            'work_start_year'   => 2017,
            'current_company'   => 'This company',
            'user_personal_message' => 'message321',
        ));
        $cms_users = DB::table('cms_users')->insert(array(
            'name'              => 'Roald',
            'surname'           => 'Verheijdt',
            'photo'             => 'uploads/1/2017-09/afb001kl_400x400.jpg',
            'email'             => 'roald@verheijdt.nl',
            'password'          => '$2y$10$QSijVZziVyV3BvQO9DvH8eZtduGn7wmFhKkXG5Tu.T7LQQ8WciBVu',
            'birthdate'         => '1976-07-13 00:00:00',
            'country'           => 'The Netherlands',
            'city'              => 'Den Haag',
            'id_cms_privileges' => $admin_role_id[0]->id,
            'created_at'        => date('Y-m-d H:i:s'),
            'updated_at'        => NULL,
            'status'            => 'Active',
            'work_start_year'   => 2003,
            'current_company'   => 'NS',
            'user_personal_message' => 'Check me out',
        ));
        $this->command->info('Done!!!');
        $this->command->info('Setting up inspireme system email addresses...');
        DB::table('cms_users')->where('email', 'admin@crudbooster.com')->update(['email' => 'admin@inspireme.com']);
        DB::table('cms_email_templates')->where('from_email', 'system@crudbooster.com')->update(['from_email' => 'system@insprme.com']);
        DB::table('cms_settings')->where('name', 'email_sender')->update(['content' => 'support@insprme.com']);
        DB::table('cms_settings')->where('name', 'appname')->update(['content' => 'InsprMe']);
        $this->command->info('Done!!!');
    }
}