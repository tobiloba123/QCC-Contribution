<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'add-department',
                'guard_name' => 'web',
                'created_at' => '2019-04-27 06:11:11',
                'updated_at' => '2019-04-27 06:11:11',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'add-employee',
                'guard_name' => 'web',
                'created_at' => '2019-04-27 06:11:11',
                'updated_at' => '2019-04-27 06:11:11',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'add-admin',
                'guard_name' => 'web',
                'created_at' => '2019-04-27 06:11:11',
                'updated_at' => '2019-04-27 06:11:11',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'add-contribution-type',
                'guard_name' => 'web',
                'created_at' => '2019-04-27 06:11:11',
                'updated_at' => '2019-04-27 06:11:11',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'accept-contribution',
                'guard_name' => 'web',
                'created_at' => '2019-04-27 06:11:11',
                'updated_at' => '2019-04-27 06:11:11',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'generate-report',
                'guard_name' => 'web',
                'created_at' => '2019-04-27 06:11:11',
                'updated_at' => '2019-04-27 06:11:11',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'generate-contribution-report',
                'guard_name' => 'web',
                'created_at' => '2019-04-27 06:11:11',
                'updated_at' => '2019-04-27 06:11:11',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'view-contribution-history',
                'guard_name' => 'web',
                'created_at' => '2019-04-27 06:11:11',
                'updated_at' => '2019-04-27 06:11:11',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'import-data',
                'guard_name' => 'web',
                'created_at' => '2019-04-27 06:11:11',
                'updated_at' => '2019-04-27 06:11:11',
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'export-data',
                'guard_name' => 'web',
                'created_at' => '2019-04-27 06:11:11',
                'updated_at' => '2019-04-27 06:11:11',
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'approve-withdrawal',
                'guard_name' => 'web',
                'created_at' => '2019-04-27 06:11:11',
                'updated_at' => '2019-04-27 06:11:11',
            ),
        ));
        
        
    }
}