<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Support\Facades\DB;

class Subject extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'course_id', 'course_name','credit','course_dept','course_status',
    ];
}
