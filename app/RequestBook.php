<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestBook extends Model
{
    public $timestamps = false;

    // public function user(){
    //     return $this->hasOne('App\User','user_id','id_user');
    // }
}
