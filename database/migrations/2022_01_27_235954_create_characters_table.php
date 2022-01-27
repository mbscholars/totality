<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('char_id');
            $table->string('name');
            $table->string('birthday')->nullable();
            $table->text('image')->nullable();
            $table->string('status')->nullable();
            $table->string('nickname')->nullable();
            $table->string('portrayed')->nullable();
            $table->string('category')->nullable();
            $table->json('appearances')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
}
