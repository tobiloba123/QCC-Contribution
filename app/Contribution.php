<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contribution extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'amount', 'approver_id', 'contribution_type_id','remark',
    ];


    public function getFormattedDateAttribute()
    {
        $startDate = strtoupper(date("F Y", strtotime($this->created_at)));
        return "{$startDate}";
    }

    public function getFormattedAmountAttribute()
    {
        $amount = number_format( $this->amount, 2 );
        return "{$amount}";
    }

    public function creditor()
    {
        return $this->hasOne('App\User', 'id','approver_id');
    }

    public function contribution_type()
    {
        return $this->hasOne('App\ContributionType', 'id','contribution_type_id');
    }

    public function user()
    {
        return $this->hasOne('App\User', 'id','user_id');
    }

}
