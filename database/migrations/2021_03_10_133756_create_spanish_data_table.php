<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpanishDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spanish_data', function (Blueprint $table) {
            $table->id();
            $table->string('title_content');
            $table->string('text_content');
            $table->unsignedBigInteger('lang_id');
            $table->unsignedBigInteger('section_id');
            $table->timestamps();

            $table->foreign('lang_id')->references('id')->on('languages');
            $table->foreign('section_id')->references('id')->on('content_sections');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spanish_data');
    }
}
