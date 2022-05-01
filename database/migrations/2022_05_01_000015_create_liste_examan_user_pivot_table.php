<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListeExamanUserPivotTable extends Migration
{
    public function up()
    {
        Schema::create('liste_examan_user', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id', 'user_id_fk_6509527')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('liste_examan_id');
            $table->foreign('liste_examan_id', 'liste_examan_id_fk_6509527')->references('id')->on('liste_examen')->onDelete('cascade');
        });
    }
}
