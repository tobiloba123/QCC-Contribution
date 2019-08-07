<?php

use Illuminate\Database\Seeder;

class WithdrawalsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('withdrawals')->delete();
        
        \DB::table('withdrawals')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 13201165,
                'approver_id' => 2,
                'amount' => 200.0,
                'remark' => 'Urgent',
                'status' => 'success',
                'approved_date' => '2019-07-13',
                'created_at' => '2019-07-13 17:58:48',
                'updated_at' => '2019-07-13 17:59:23',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 13201165,
                'approver_id' => 2,
                'amount' => 100.0,
                'remark' => 'testing',
                'status' => 'success',
                'approved_date' => '2019-07-13',
                'created_at' => '2019-07-13 18:03:39',
                'updated_at' => '2019-07-13 18:04:14',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 13201165,
                'approver_id' => 2,
                'amount' => 100.0,
                'remark' => 'Testing',
                'status' => 'success',
                'approved_date' => '2019-07-13',
                'created_at' => '2019-07-13 18:07:28',
                'updated_at' => '2019-07-13 18:09:03',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}