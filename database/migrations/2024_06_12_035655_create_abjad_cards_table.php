<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbjadCardsTable extends Migration
{
    public function up()
    {
        Schema::create('abjad_cards', function (Blueprint $table) {
            $table->id();
            $table->char('abjad', 1);
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('image_url');
            $table->string('video_url');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('abjad_cards');
    }
}
