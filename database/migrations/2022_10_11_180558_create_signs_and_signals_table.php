<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signs_and_signals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sectionID');
            $table->string('sectionName');
            $table->string('signName');
            $table->string('img');
            $table->timestamps();
            $table->foreign('sectionID')->references('id')->on('category')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('signs_and_signals');
    }
};
