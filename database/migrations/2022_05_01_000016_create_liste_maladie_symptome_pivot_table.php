<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListeMaladieSymptomePivotTable extends Migration
{
    public function up()
    {
        Schema::create('liste_maladie_symptome', function (Blueprint $table) {
            $table->unsignedBigInteger('symptome_id');
            $table->foreign('symptome_id', 'symptome_id_fk_6521905')->references('id')->on('symptomes')->onDelete('cascade');
            $table->unsignedBigInteger('liste_maladie_id');
            $table->foreign('liste_maladie_id', 'liste_maladie_id_fk_6521905')->references('id')->on('liste_maladies')->onDelete('cascade');
        });
    }
}
