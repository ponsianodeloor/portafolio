<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('education', function (Blueprint $table) {
            $table->text('description')->change();
        });
    }

    public function down()
    {
        Schema::table('education', function (Blueprint $table) {
            //
        });
    }
};
