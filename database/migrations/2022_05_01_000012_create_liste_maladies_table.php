<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListeMaladiesTable extends Migration
{
    public function up()
    {
        Schema::create('liste_maladies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom')->nullable();
            $table->string('description')->nullable();
            $table->string('categorie')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
