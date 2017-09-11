<?php

use Illuminate\Database\Seeder;

class InspiremeInterestsSkills extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Please wait while setting up database for Interests and Skills...');
        $this->call('InterestsSeeder');
        $this->call('SkillsSeeder');
        $this->command->info('Setting up database for Interests and Skills completed !!!!');
    }
}


class InterestsSeeder extends Seeder {

    public function run()
    {
        $roles = DB::table('cms_privileges')->select('id', 'name')->get();
        $super_admin = DB::table('cms_privileges')->select('id', 'name')->where('is_superadmin', 1)->get();
        
        $this->command->info('Setting up menu of Interest module for admin panel...');
        if(DB::table('cms_moduls')->where('name','interests')->count() == 0) {
            DB::table('cms_moduls')->insert([
                'name' =>'interests',
                'icon' =>'fa fa-heart',
                'path'   =>'interests',
                'table_name' =>'interests',
                'controller' =>'AdminInterestsController',
                'is_protected' =>'0',
                'is_active' =>'0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => NULL,
                'deleted_at' =>NULL,
            ]);
        }
        $this->command->info('Done!!!');

        $this->command->info('Setting up menu permission of Interest module for admin panel...');
        //Add admin menu permission for Interest module
        if(DB::table('cms_menus')->where('name','interests')->count() == 0) {
            DB::table('cms_menus')->insert([
                'name' => 'interests',
                'type' => 'Route',
                'path' => 'AdminInterestsControllerGetIndex',
                'color' => NULL,
                'icon' => 'fa fa-heart',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => $super_admin[0]->id,
                'sorting' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => NULL
            ]);
            $cms_menus = DB::table('cms_menus')->where('name','interests')->get();
            foreach($roles as $role) {
                if(($role->name == 'Admin') || ($role->name == 'System user') || ($role->name == 'Super Administrator')) {
                    DB::table('cms_menus_privileges')->insert([
                        'id_cms_menus' => $cms_menus[0]->id,
                        'id_cms_privileges' => $role->id,
                    ]);
                }
            }
        }

        $this->command->info('Done!!!');

        $this->command->info('Setting up user roles permissions for Interest module for admin panel...');
        $module = DB::table('cms_moduls')->where('name','interests')->get();
        if(!empty($roles)) {
            foreach($roles as $role) {
                $is_visible = 1;
                $is_create  = 1;
                $is_read    = 1;
                $is_edit    = 1;
                $is_delete  = 1;
                if(($role->name == 'Admin') || ($role->name == 'System user') || ($role->name == 'Super Administrator')) {
                    DB::table('cms_privileges_roles')->insert([
                        'is_visible'=>$is_visible,
                        'is_create'=>$is_create,
                        'is_edit'=>$is_edit,
                        'is_delete'=>$is_delete,
                        'is_read'=>$is_read,
                        'id_cms_privileges'=>$role->id,
                        'id_cms_moduls'=>$module[0]->id,
                        'created_at'=>date('Y-m-d H:i:s')
                    ]);
                }
            }
        }
        $this->command->info('Done!!!');
        $this->command->info('Completed Interests module setup successfully!!!');
    }
}

class SkillsSeeder extends Seeder {

    public function run()
    {
        $roles = DB::table('cms_privileges')->select('id', 'name')->get();
        $super_admin = DB::table('cms_privileges')->select('id', 'name')->where('is_superadmin', 1)->get();

        $this->command->info('Setting up menu of Skills module for admin panel...');
        if(DB::table('cms_moduls')->where('name','skills')->count() == 0) {
            DB::table('cms_moduls')->insert([
                'name' =>'skills',
                'icon' =>'fa fa-puzzle-piece',
                'path'   =>'skills',
                'table_name' =>'skills',
                'controller' =>'AdminSkillsController',
                'is_protected' =>'0',
                'is_active' =>'0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => NULL,
                'deleted_at' =>NULL,
            ]);
        }
        $this->command->info('Done!!!');

        $this->command->info('Setting up menu permission of Skills module for admin panel...');
        //Add admin menu permission for Interest module
        if(DB::table('cms_menus')->where('name','skills')->count() == 0) {
            DB::table('cms_menus')->insert([
                'name' => 'skills',
                'type' => 'Route',
                'path' => 'AdminSkillsControllerGetIndex',
                'color' => NULL,
                'icon' => 'fa fa-puzzle-piece',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => $super_admin[0]->id,
                'sorting' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => NULL
            ]);
            $cms_menus = DB::table('cms_menus')->where('name','skills')->get();
            foreach($roles as $role) {
                if(($role->name == 'Admin') || ($role->name == 'System user') || ($role->name == 'Super Administrator')) {
                    DB::table('cms_menus_privileges')->insert([
                        'id_cms_menus' => $cms_menus[0]->id,
                        'id_cms_privileges' => $role->id,
                    ]);
                }
            }
        }

        $this->command->info('Done!!!');

        $this->command->info('Setting up user roles permissions for Skills module for admin panel...');
        $module = DB::table('cms_moduls')->where('name','skills')->get();
        if(!empty($roles)) {
            foreach($roles as $role) {
                $is_visible = 1;
                $is_create  = 1;
                $is_read    = 1;
                $is_edit    = 1;
                $is_delete  = 1;
                if(($role->name == 'Admin') || ($role->name == 'System user') || ($role->name == 'Super Administrator')) {
                    DB::table('cms_privileges_roles')->insert([
                        'is_visible'=>$is_visible,
                        'is_create'=>$is_create,
                        'is_edit'=>$is_edit,
                        'is_delete'=>$is_delete,
                        'is_read'=>$is_read,
                        'id_cms_privileges'=>$role->id,
                        'id_cms_moduls'=>$module[0]->id,
                        'created_at'=>date('Y-m-d H:i:s')
                    ]);
                }
            }
        }
        $this->command->info('Done!!!');
        $this->command->info('Completed Interests module setup successfully!!!');
    }
}