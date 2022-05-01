<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListeExamanListeMaladiePivotTable extends Migration
{
    public function up()
    {
        Schema::create('liste_examan_liste_maladie', function (Blueprint $table) {
            $table->unsignedBigInteger('liste_examan_id');
            $table->foreign('liste_examan_id', 'liste_examan_id_fk_6521953')->references('id')->on('liste_examen')->onDelete('cascade');
            $table->unsignedBigInteger('liste_maladie_id');
            $table->foreign('liste_maladie_id', 'liste_maladie_id_fk_6521953')->references('id')->on('liste_maladies')->onDelete('cascade');
        });
    }
}
