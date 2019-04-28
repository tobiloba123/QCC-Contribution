<?php

use Illuminate\Database\Seeder;

class UserDepartmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_departments')->delete();
        
        \DB::table('user_departments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'department_id' => 1,
                'created_at' => '2019-04-28 06:20:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'department_id' => 1,
                'created_at' => '2019-04-28 09:10:00',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}