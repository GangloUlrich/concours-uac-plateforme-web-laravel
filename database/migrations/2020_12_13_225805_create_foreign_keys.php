<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('etudiants', function(Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });

        Schema::table('recruteurs', function(Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });

        Schema::table('reponses', function(Blueprint $table) {
            $table->foreign('question_id')->references('id_question')->on('questions')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });

        Schema::table('opportunites', function(Blueprint $table) {
            $table->foreign('recruteur_id')->references('id_recruteur')->on('recruteurs')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });

        Schema::table('postulations', function(Blueprint $table) {
            $table->foreign('etudiant_id')->references('id_etudiant')->on('etudiants')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });

        Schema::table('postulations', function(Blueprint $table) {
            $table->foreign('opportunite_id')->references('id_opportunite')->on('opportunites')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
