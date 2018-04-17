<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmissionModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admission', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name','50');
            $table->string('fathername','50');
            $table->string('mothername','50');
            $table->char('class',10);
            $table->char('dateofbirth',50);
            $table->char('gender',50);
            $table->char('address',250);
            $table->char('bloodgroup',20);
            $table->char('shift',20);
            $table->char('nidofguardian',20);
            $table->char('preschool',50);
            $table->char('guardianname',50);
            $table->char('image',250);
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
        Schema::dropIfExists('admission_models');
    }
}
