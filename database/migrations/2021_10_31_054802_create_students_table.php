<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('uname');
            $table->string('stu_id');
            $table->string('gender');
            $table->string('religon');
            $table->date('dob');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('stu_dept');
            $table->date('add_date');
            $table->string('profile_img');
            $table->string('email')->unique();
            $table->string('phone_num')->nullable();
            $table->string('curent_address')->nullable();
            $table->string('parmnt_address')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('user_type')->default('1');
            $table->softDeletes();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
