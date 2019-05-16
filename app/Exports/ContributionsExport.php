<?php

namespace App\Exports;

use Log;
use App\Contribution;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ContributionsExport implements FromQuery, WithHeadings, WithMapping
{
    use Exportable;
    public function __construct(String $keyword)
    {
        $this->keyword = $keyword;
        $this->rows = 0;
    }

    

    public function query()
    {

        return Contribution::query()
        ->with('creditor','contribution_type','user')
        ->withTrashed()
        ->orderBy('created_at','DESC')
        ->where('remark','like','%' . $this->keyword . '%')
        ->whereOr('user_id','=',$this->keyword)
        ->whereOr('amount','like','%' . $this->keyword . '%')
        ->whereOr('approved_date','like','%' . $this->keyword . '%')
        ->whereOr('created_at','like','%' . $this->keyword . '%');

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
