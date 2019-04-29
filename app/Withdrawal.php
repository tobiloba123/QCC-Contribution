<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Withdrawal extends Model
{
    //
    use SoftDeletes;

    public function approver()
    {
        return $this->hasOne('App\User', 'id','approver_id');
    }

    public function user()
    {
        return $this->hasOne('App\User', 'id','user_id');
    }

}
