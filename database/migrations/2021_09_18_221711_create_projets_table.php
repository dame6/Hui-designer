<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('slogan');
            $table->string('lien');
            $table->string('catégorie');
            $table->string('img');
            $table->longText('description');
            $table->longText('context');
            $table->longText('enjeux');
            $table->longText('oeuvre');
            $table->string('img_context');
            $table->string('img_enjeux');
            $table->string('img_oeuvre');
            $table->string('img_a');
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
        Schema::dropIfExists('projets');
    }
}
