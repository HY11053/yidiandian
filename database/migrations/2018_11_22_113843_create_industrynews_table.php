<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndustrynewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industrynews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('typeid');
            $table->integer('ismake');
            $table->integer('click');
            $table->string('title');
            $table->string('url');
            $table->string('flags')->nullable();
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('write');
            $table->string('litpic')->nullable();
            $table->smallInteger('dutyadmin');
            $table->text('body')->nullable();
            $table->timestamps();
            $table->index('click');
            $table->index('typeid');
            $table->index('title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('industrynews');
    }
}
