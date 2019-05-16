<?php

namespace App\Exports;


use App\Withdrawal;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class WithdrawalsExport implements FromQuery, WithHeadings, WithMapping
{
    use Exportable;
    public function __construct(String $keyword)
    {
        $this->keyword = $keyword;
        $this->rows = 0;
    }

    

    public function query()
    {

        return Withdrawal::query()
        ->with('user','approver')
        ->withTrashed()
        ->orderBy('created_at','DESC')
        ->where('remark','like','%' . $this->keyword . '%')
        ->whereOr('amount','like','%' . $this->keyword . '%')
        ->whereOr('approved_date','like','%' . $this->keyword . '%')
        ->whereOr('created_at','like','%' . $this->keyword . '%');

    }


    public function headings(): array
    {
        return [
            '#',
            'User',
            'Approved By',
            'Amount',
            'Remark',
            'Status',
            'Approved Date',
            'Created Date',
            'Updated Date',
        ];
    }


    public function map($withdrawal): array
    {
        
        $this->rows++;

        if(empty($withdrawal->approver)){

            return [
                $this->rows,
                $withdrawal->user->first_name.' '.$withdrawal->user->last_name,
                '',
                $withdrawal->amount,
                $withdrawal->remark,
                $withdrawal->status,
                $withdrawal->approved_date,
                $withdrawal->created_at,
                $withdrawal->updated_at,
            ];

        }else{

            return [
                $this->rows,
                $withdrawal->user->first_name.' '.$withdrawal->user->last_name,
                $withdrawal->approver->first_name.' '.$withdrawal->approver->last_name,
                $withdrawal->amount,
                $withdrawal->remark,
                $withdrawal->status,
                $withdrawal->approved_date,
                $withdrawal->created_at,
                $withdrawal->updated_at,
            ];

        }

        
    }

}
