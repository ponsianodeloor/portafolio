<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->string('url_photo')->nullable()->change();
            $table->string('url_photo_background')->nullable()->change();
            $table->string('url_linkedin')->nullable()->change();
            $table->string('url_github')->nullable()->change();
            $table->string('url_twitter')->nullable()->change();
            $table->string('slogan')->nullable()->change();
            $table->string('slogan_dynamic')->nullable()->change();
            $table->string('message')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            //
        });
    }
};
