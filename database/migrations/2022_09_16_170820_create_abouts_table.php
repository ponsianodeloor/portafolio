<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();

            $table->string('about');
            $table->string('who_are_you');
            $table->string('short_description');
            $table->date('date_of_birth');
            $table->string('website');
            $table->string('phone');
            $table->string('city');
            $table->string('degree');
            $table->string('status');
            $table->string('description');
            $table->string('facts_description');
            $table->string('skills_description');
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('abouts');
    }
};
