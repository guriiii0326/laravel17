<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileHistory extends Model
{
    protected $table = 'profile_historys';
    //
    protected $guarded=array('id');
    
    public static $rules=array(
        'profele_id'=>'required',
        'edited_at'=>'required',
        );
}
