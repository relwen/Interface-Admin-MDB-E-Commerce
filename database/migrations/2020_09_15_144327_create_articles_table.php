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
            $table->increments('id');
            $table->integer('categorie_id')->unsigned();
            $table->string('libelle_article');
            $table->integer('prix_article');
            $table->integer('stock_article');
            $table->string('descriptif_article')->nullable();
            $table->string('img1_article');
            $table->string('img2_article')->nullable();
            $table->string('img3_article')->nullable();
            // $table->id();
            // $table->timestamps();

            $table->foreign('categorie_id')->references('id')->on('categories');
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
