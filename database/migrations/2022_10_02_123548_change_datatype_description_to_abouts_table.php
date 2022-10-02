<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('abouts', function (Blueprint $table) {
            $table->text('short_description')->change();
            $table->text('description')->change();
            $table->text('facts_description')->change();
            $table->text('skills_description')->change();
        });
    }

    public function down()
    {
        Schema::table('abouts', function (Blueprint $table) {
            //
        });
    }
};
