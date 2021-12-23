<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'uname','email','password','stu_id','gender','religon', 'dob','father_name',
        'mother_name','stu_dept','add_date','profile_img','phone_num','curent_address','parmnt_address',
    ];


}
