<?php

use Illuminate\Database\Seeder;

class ContributionTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contribution_types')->delete();
        
        \DB::table('contribution_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'PF',
                'amount' => 900.0,
                'class' => '1',
                'creator_id' => 2,
                'created_at' => '2019-05-16 12:11:18',
                'updated_at' => '2019-07-11 12:03:37',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Mutual',
                'amount' => 5.0,
                'class' => '0',
                'creator_id' => 2,
                'created_at' => '2019-05-27 04:48:55',
                'updated_at' => '2019-07-11 12:03:52',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}