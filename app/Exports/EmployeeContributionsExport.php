<?php

namespace App\Exports;

use Log;
use App\Contribution;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class EmployeeContributionsExport implements FromQuery, WithHeadings, WithMapping
{
    use Exportable;
    public function __construct(int $user_id)
    {
        $this->user_id = $user_id;
        $this->rows = 0;
    }

    

    public function query()
    {

        return Contribution::query()
        ->with('creditor','contribution_type','user')
        ->withTrashed()
        ->orderBy('created_at','DESC')
        ->where('user_id','=',$this->user_id);

    }


    public function headings(): array
    {
        return [
            '#',
            'User',
            'Amount',
            'Contribution Type',
            'Remark',
            'Credited By',
            'Credited On',
        ];
    }


    public function map($contribution): array
    {
        
        $this->rows++;

        return [
            $this->rows,
            $contribution->user->first_name.' '.$contribution->user->last_name,
            $contribution->amount,
            $contribution->contribution_type->name,
            $contribution->remark,
            $contribution->creditor->first_name.' '.$contribution->creditor->last_name,
            $contribution->created_at,
        ];

        
    }

}
