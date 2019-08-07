<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Carbon;


class RollOver extends Model
{
    //

    public function getFormattedStartDateAttribute()
    {
        $startDate = strtoupper(date("M Y", strtotime($this->start_date)));
        return "{$startDate}";
    }

    public function getFormattedEndDateAttribute()
    {
        $startDate = strtoupper(date("M Y", strtotime($this->end_date)));
        return "{$startDate}";
    }

    public function getReadableEndDateAttribute()
    {
        $startDate = strtoupper(date("M Y", strtotime($this->end_date)));
        return "{$startDate}";
    }

    public function getFormattedBalanceAttribute()
    {
        $balance = number_format( $this->balance, 2 );
        return "{$balance}";
    }

    public function getFormattedWithdrawnAttribute()
    {
        $amount_withdrawn = number_format( $this->amount_withdrawn, 2 );
        return "{$amount_withdrawn}";
    }

    public function getFormattedOldBalanceAttribute()
    {
        $balance = number_format( ( $this->balance - $this->amount_withdrawn ) , 2 );
        return "{$balance}";
    }


    public function approver()
    {
        return $this->hasOne('App\User','id', 'approver_id');
    }



}
