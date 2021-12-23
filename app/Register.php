<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Builder;

use Illuminate\Database\Eloquent\SoftDeletes;

class Register extends Model
{
    use SoftDeletes;



    protected $fillable = [
        'name', 'uname','email','password','reg_id','gender','religon',
        'reg_dept','reg_img','phone_num',
    ];




}
