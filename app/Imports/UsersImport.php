<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Hash;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'first_name'       => $row['first_name'],
            'last_name'        => $row['last_name'],
            'email'            => $row['email'], 
            'phone'            => $row['phone'],
            'username'         => $row['username'],
            'address'          => $row['address'], 
            'salary'           => $row['salary'],
            'job_description'  => $row['job_description'],
            'password'         => Hash::make("secret"),
         ]);
    }
}
