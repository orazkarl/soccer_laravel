<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuessTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guess_teams', function (Blueprint $table) {
            $table->id();
            $table->text('question');
            $table->binary('image');
            $table->string('variant1');
            $table->string('variant2');
            $table->string('variant3');
            $table->string('variant4');
            $table->string('answer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guess_teams');
    }
}
