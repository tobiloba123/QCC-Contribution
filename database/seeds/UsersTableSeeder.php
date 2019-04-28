<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'first_name' => 'Ambrose',
                'last_name' => 'Bako',
                'picture_url' => NULL,
                'email' => 'bakoambrose@gmail.com',
                'phone' => '0557484181',
                'username' => 'ambrose0012',
                'address' => 'Nii Boi, Lapaz',
                'job_description' => 'CEO',
                'email_verified_at' => NULL,
                'password' => '$2y$10$FGD8Sj2jTObiGOz9FyrEC.EFtriFEiQBJfFIH4LJvDFTGitbZFsly',
                'remember_token' => NULL,
                'created_at' => '2019-04-28 07:24:07',
                'updated_at' => '2019-04-28 16:07:46',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'first_name' => 'Tobi',
                'last_name' => 'Joseph',
                'picture_url' => NULL,
                'email' => 'tobibakoambrose@gmail.com',
                'phone' => '0557484182',
                'username' => 'tobi0012',
                'address' => 'Nii Boi, Lapaz',
                'job_description' => 'CEO',
                'email_verified_at' => NULL,
                'password' => '$2y$10$FGD8Sj2jTObiGOz9FyrEC.EFtriFEiQBJfFIH4LJvDFTGitbZFsly',
                'remember_token' => NULL,
                'created_at' => '2019-04-28 07:24:07',
                'updated_at' => '2019-04-28 16:07:46',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}