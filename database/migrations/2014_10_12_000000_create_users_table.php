<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->autoIncrement();
            $table->string('user_first_name');
            $table->string('user_last_name');
            $table->string('user_username')->unique();
            $table->string('user_id_number');
            $table->string('user_phone_number');
            $table->string('user_rank')->default('RANK3');
            $table->string('user_email')->unique();
            $table->string('user_password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
