<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKibokosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kibokos', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('kiboko_kgs');
            $table->unsignedInteger('price');
            $table->enum('reason', ['fees', 'loan payment', 'cash']);
            $table->foreignId('member_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('kibokos');
    }
}
