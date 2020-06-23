<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FilmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film', function (Blueprint $table) {
            $table->id('id_film');
            $table->unsignedInteger('id_distrib');
            $table->unsignedInteger('id_genre');
            $table->string('titre');
            $table->longText('resumer');
            $table->date('annee_prod');
            $table->unsignedInteger('duree_min');
            $table->string('source');
            $table->string('href');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('film');
    }
}
