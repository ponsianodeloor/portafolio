<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();

            $table->string('project');
            $table->text('description');
            $table->string('client');
            $table->date('date');
            $table->string('url');
            $table->unsignedBigInteger('portfolio_id');
            $table->unsignedBigInteger('category_id');

            $table->foreign('portfolio_id')
                ->references('id')
                ->on('portfolios')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('category_id')
                ->references('id')
                ->on('project_categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
