<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('departments')->delete();
        
        \DB::table('departments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'ISD',
                'creator_id' => 2,
                'created_at' => '2019-04-28 23:39:56',
                'updated_at' => '2019-07-11 12:03:16',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Research Department',
                'creator_id' => 2,
                'created_at' => '2019-05-27 04:44:28',
                'updated_at' => '2019-05-27 04:44:28',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}