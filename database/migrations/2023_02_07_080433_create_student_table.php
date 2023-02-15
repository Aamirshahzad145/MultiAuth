<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('fatname');
            $table->string('email');
            $table->string('rolnumber');
            $table->string('phone');
            $table->string('date');
            $table->string('address');
            $table->string('gender');
            $table->string('province');
            $table->string('city');
            $table->json('skills');
            $table->json('subject');
            $table->string('image');
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
        Schema::dropIfExists('student');
    }
};
