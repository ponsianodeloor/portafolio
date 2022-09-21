<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(){
        Schema::create('professional_experiences', function (Blueprint $table) {
            $table->id();

            $table->string('position');
            $table->date('date_start');
            $table->date('date_end')->nullable();
            $table->string('city');
            $table->string('description');
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
        Schema::dropIfExists('professional_experiences');
    }
};
