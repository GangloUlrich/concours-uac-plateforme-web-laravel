<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpportunitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opportunites', function (Blueprint $table) {
            $table->increments('id_opportunite');
            $table->integer('recruteur_id');
            $table->enum('type',['emploi', 'stage']);
            $table->string('titre_opportunite');
            $table->string('description');
            $table->date('delai');
            $table->boolean('activation')->default(false);
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
        Schema::dropIfExists('opportunites');
    }
}
