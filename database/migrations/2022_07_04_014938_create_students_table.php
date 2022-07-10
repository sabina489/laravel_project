<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name', 150);
            $table->string('mobile, 10')->unique();
            $table->string('email', 150)->unique();
            $table->string('citizenship', 20)-> unique();
            $table->string('gender', 1);
            $table->string('perm-address', 150);
            $table->string('temp-address', 150);
            $table->date('dob', 150);
            $table->string('blood-group', 3);
            $table->boolean('is_active')->default(true);
            $table->boolean('is_almuni');
            $table->string('picture', 20);
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
