<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAstucesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('astuces', function (Blueprint $table) {
            $table->increments('id_astuce');
            $table->string('titre_astuce');
            $table->text('contenu_astuce');
            $table->string('image_astuce');
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
        Schema::dropIfExists('astuces');
    }
}
