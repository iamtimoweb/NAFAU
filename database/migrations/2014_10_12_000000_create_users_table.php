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
            $table->id();
//            $table->string('membership_no_id')->unique()->default(0);
            $table->string('firstname', 15);
            $table->string('lastname', 15);
            $table->string('email', 30)->unique();
            $table->string('password');
            $table->string('phone_no', 10)->unique();
            $table->rememberToken();
            $table->boolean('is_active')->default(0);
            $table->string('image')->nullable();
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
