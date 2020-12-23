<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->increments('id_etudiant');
            $table->integer('user_id');
            $table->string('prenom');
            $table->string('contact')->nullable();
            $table->integer('age')->nullable();
            $table->string('entite')->nullable();
            $table->enum('niveau',['1ere annee', '2eme annee', '3eme annee'])->nullable();
            $table->text('competences')->nullable();
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
        Schema::dropIfExists('etudiants');
    }
}
