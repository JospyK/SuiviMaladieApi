<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamenTable extends Migration
{
    public function up()
    {
        Schema::create('examen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom')->nullable();
            $table->string('description')->nullable();
            $table->longText('resultats')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
