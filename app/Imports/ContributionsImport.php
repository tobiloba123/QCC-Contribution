<?php

namespace App\Imports;

use App\Contribution;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ContributionsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Contribution([
            'user_id'               => $row['user_id'],
            'amount'                => $row['amount'],
            'approver_id'           => $row['approver_id'], 
            'contribution_type_id'  => $row['contribution_type_id'],
            'remark'                => $row['remark'],
        ]);
    }
}
