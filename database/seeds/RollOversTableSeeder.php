<?php

use Illuminate\Database\Seeder;

class RollOversTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roll_overs')->delete();
        
        \DB::table('roll_overs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1104546,
                'approver_id' => 3,
                'start_date' => '2019-05-01 10:20:12',
                'end_date' => '2019-08-06 10:20:12',
                'balance' => 100.0,
                'amount_withdrawn' => 10.0,
                'created_at' => '2019-08-06 10:20:12',
                'updated_at' => '2019-08-06 10:20:12',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}