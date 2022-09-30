<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('personal_references', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('position');
            $table->string('company');
            $table->string('email');
            $table->string('cel');
            $table->text('testimonial');
            $table->unsignedBigInteger('testimonial_id');

            $table->foreign('testimonial_id')
                ->references('id')
                ->on('testimonials')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('personal_references');
    }
};
