<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'guard_name' => 'web',
                'created_at' => '2019-04-27 06:11:11',
                'updated_at' => '2019-04-27 06:11:11',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Employee',
                'guard_name' => 'web',
                'created_at' => '2019-04-27 06:11:11',
                'updated_at' => '2019-04-27 06:11:11',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Super-Admin',
                'guard_name' => 'web',
                'created_at' => '2019-04-27 06:11:11',
                'updated_at' => '2019-04-27 06:11:11',
            ),
        ));
        
        
    }
}