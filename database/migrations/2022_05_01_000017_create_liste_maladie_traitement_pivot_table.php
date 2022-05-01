<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListeMaladieTraitementPivotTable extends Migration
{
    public function up()
    {
        Schema::create('liste_maladie_traitement', function (Blueprint $table) {
            $table->unsignedBigInteger('traitement_id');
            $table->foreign('traitement_id', 'traitement_id_fk_6521906')->references('id')->on('traitements')->onDelete('cascade');
            $table->unsignedBigInteger('liste_maladie_id');
            $table->foreign('liste_maladie_id', 'liste_maladie_id_fk_6521906')->references('id')->on('liste_maladies')->onDelete('cascade');
        });
    }
}
