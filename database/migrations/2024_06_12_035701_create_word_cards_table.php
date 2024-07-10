<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWordCardsTable extends Migration
{
    public function up()
    {
        Schema::create('word_cards', function (Blueprint $table) {
            $table->id();
            $table->string('word');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('image_url');
            $table->string('video_url');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('word_cards');
    }
}
