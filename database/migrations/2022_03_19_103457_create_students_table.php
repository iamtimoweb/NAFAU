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
            $table->string('surname', 30);
            $table->string('other_names', 30);
            $table->date('date_of_birth')->nullable();
            $table->string('age', 3)->nullable();
            $table->string('student_id_no', 10)->unique()->nullable();
            $table->string('nationality', 30)->nullable();
            $table->string('religion', 30)->nullable();
            $table->string('location', 30)->nullable();
            $table->date('date_of_entry')->nullable();
            $table->enum('relationship_with_student', ['parent', 'guardian']);
            $table->string('image')->nullable();
            $table->timestamps();
            $table->foreignId('member_id')->constrained()->onDelete('cascade');
            $table->foreignId('entry_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('students');
    }
}
