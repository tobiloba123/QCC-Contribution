<?php

use Illuminate\Database\Seeder;

class InterestsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('interests')->delete();
        
        \DB::table('interests')->insert(array (
            0 => 
            array (
                'id' => 1,
                'approver_id' => 3,
                'amount' => 12.3,
                'created_at' => '2019-08-07 06:24:33',
                'updated_at' => '2019-08-07 06:24:33',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}