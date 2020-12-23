<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruteurs', function (Blueprint $table) {
            $table->increments('id_recruteur');
            $table->integer('user_id');
            $table->string('prenom');
            $table->string('contact')->nullable();
            $table->string('nom_entreprise')->nullable();
            $table->string('domaine')->nullable();
            $table->string('poste')->nullable();
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
        Schema::dropIfExists('recruteurs');
    }
}
