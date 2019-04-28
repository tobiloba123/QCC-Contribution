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
                'name' => 'ICT',
                'creator_id' => 2,
                'created_at' => '2019-04-28 19:39:56',
                'updated_at' => '2019-04-28 19:39:56',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}