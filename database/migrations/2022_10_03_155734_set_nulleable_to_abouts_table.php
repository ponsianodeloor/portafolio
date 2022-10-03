<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('abouts', function (Blueprint $table) {
            $table->string('about')->nullable()->change();
            $table->string('who_are_you')->nullable()->change();
            $table->text('short_description')->nullable()->change();
            $table->date('date_of_birth')->nullable()->change();
            $table->string('website')->nullable()->change();
            $table->string('phone')->nullable()->change();
            $table->string('city')->nullable()->change();
            $table->string('degree')->nullable()->change();
            $table->string('status')->nullable()->change();
            $table->text('description')->nullable()->change();
            $table->text('facts_description')->nullable()->change();
            $table->text('skills_description')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('abouts', function (Blueprint $table) {
            //
        });
    }
};
