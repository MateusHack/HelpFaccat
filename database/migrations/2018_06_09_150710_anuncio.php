<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Anuncio extends Migration
{
    public function up()
    {
        Schema::create('anuncio', function (Blueprint $table) {
            $table->increments('id_anuncio');
            $table->integer('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('titulo');
            $table->text('descricao');
            $table->text('contato');
            $table->text('situacao')->nullable();
            $table->integer('id_user_help')->nullable();
            $table->foreign('id_user_help')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('anuncio');
    }
}
