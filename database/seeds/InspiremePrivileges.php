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
    }
}

class CmsPrivilegesRolesSeeder extends Seeder {

    public function run()
    {
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
    }
}

class CmsUsersSeeder extends Seeder {

    public function run()
    {
        $password = \Hash::make('123456');
        $admin_role_id = DB::table('cms_privileges')->select('id')->where('name', '=', 'Admin')->get();
        $cms_users = DB::table('cms_users')->insert(array(
            'id'                =>DB::table('cms_users')->max('id')+1,
            'name'              => 'Himesh',
            'surname'           => 'Challa',
            'photo'             => NULL,
            'email'             => 'himesh@insprme.co',
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
            'email'             => 'nilesh@insprme.co',
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
        
        DB::table('cms_users')->where('email', 'admin@crudbooster.com')->update(['email' => 'admin@insprme.co']);
        DB::table('cms_email_templates')->where('from_email', 'system@crudbooster.com')->update(['from_email' => 'system@insprme.co']);
        DB::table('cms_settings')->where('name', 'email_sender')->update(['content' => 'support@insprme.co']);
        DB::table('cms_settings')->where('name', 'appname')->update(['content' => 'InsprMe']);
    }
}