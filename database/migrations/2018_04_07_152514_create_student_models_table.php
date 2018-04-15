<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name',20);
            $table->text('class',2);
            $table->text('roll',6);
            $table->text('session',6);
            $table->text('shift',2);
            $table->text('studentid',20);
            $table->text('section',20);
            $table->text('fathername',20);
            $table->text('mothername',20);
            $table->text('datofbirth',20);
            $table->text('phone',20);
            $table->text('gender',20);
            $table->text('address',256);
            $table->text('bloodgroup',10);
            $table->text('nidofguardian',20);
            $table->text('guardian',100);
            $table->text('image',256);
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
