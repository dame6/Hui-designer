<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('nom_aut');
            $table->string('img_aut');
            $table->string('publication');
            $table->string('img');
            $table->longText('introduction');
            $table->longText('section_a');
            $table->longText('section_b');
            $table->longText('section_c');
            $table->longText('section_d');
            $table->longText('section_e');
            $table->string('img_a');
            $table->string('img_b');
            $table->string('img_c');
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
        Schema::dropIfExists('articles');
    }
}
