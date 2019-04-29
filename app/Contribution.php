<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contribution extends Model
{
    //
    use SoftDeletes;

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
