<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('type_services', function (Blueprint $table) {
            $table->id();

            $table->string('icon');
            $table->string('title');
            $table->string('short_description');
            $table->unsignedBigInteger('service_id');

            $table->foreign('service_id')
                ->references('id')
                ->on('services')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('type_services');
    }
};
