<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('uname');
            $table->string('reg_id');
            $table->string('gender');
            $table->string('religon');
            $table->string('reg_dept');
            $table->string('reg_img');
            $table->string('email')->unique();
            $table->string('phone_num')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('user_type')->default('2');
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
        Schema::dropIfExists('registers',function (Blueprint $table)
        {
            $table->dropSoftDeletes();

        });

    }
}
