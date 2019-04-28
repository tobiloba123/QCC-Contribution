<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContributionType extends Model
{
    //
    use SoftDeletes;

    public function creator()
    {
        return $this->hasOne('App\User', 'id','creator_id');
    }

}
