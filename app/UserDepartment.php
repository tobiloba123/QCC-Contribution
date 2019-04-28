<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserDepartment extends Model
{
    //
    use SoftDeletes;

    public function department()
    {
        return $this->hasOne('App\Department','id','department_id');
    }

}
