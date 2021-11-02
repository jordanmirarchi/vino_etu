<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBouteillesAcheteesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bouteilles_achetees', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->text("description")->nullable();
            $table->string("url_image")->nullable();
            $table->string("url_achat")->nullable();
            $table->string("url_info")->nullable();
            $table->string("origine");
            $table->smallInteger("millesime")->unsigned();
            $table->date("date_acquisition")->nullable();
            $table->float("prix_paye", 8, 2, true)->nullable();
            $table->string("conservation", 500)->nullable();
            $table->text("notes_personnelles")->nullable();
            $table->string("format")->nullable();
            $table->foreignId("categories_id")->constrained("categories");
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
        Schema::dropIfExists('bouteilles_achetees');
    }
}