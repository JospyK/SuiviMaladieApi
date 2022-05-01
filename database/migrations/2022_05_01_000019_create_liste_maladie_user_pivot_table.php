<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListeMaladieUserPivotTable extends Migration
{
    public function up()
    {
        Schema::create('liste_maladie_user', function (Blueprint $table) {
            $table->unsignedBigInteger('liste_maladie_id');
            $table->foreign('liste_maladie_id', 'liste_maladie_id_fk_6522409')->references('id')->on('liste_maladies')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id', 'user_id_fk_6522409')->references('id')->on('users')->onDelete('cascade');
        });
    }
}
