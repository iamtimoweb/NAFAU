<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('farmer_identification_no', 30)->unique();
            $table->string('firstname', 30);
            $table->string('lastname', 30);
            $table->string('district', 30);
            $table->string('county', 30);
            $table->string('parish', 30);
            $table->string('village', 30);
            $table->enum('gender', ['male', 'female']);
            $table->date('date_of_birth')->nullable();
            $table->string('age', 3)->nullable();
            $table->string('phone', 10)->unique()->nullable();
            $table->string('nin', 14)->unique()->nullable();
            $table->string('profession', 30)->nullable();
            $table->string('occupation', 30)->nullable();
            $table->unsignedFloat('acrage')->nullable();
            $table->unsignedInteger('no_of_coffee_trees')->nullable();
            $table->decimal('lat', 10, 8)->nullable();
            $table->decimal('lng', 11, 8)->nullable();
            $table->enum('coffee_type', ['Arabica', 'Robusta']);
            $table->unsignedInteger('no_of_dependants')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
