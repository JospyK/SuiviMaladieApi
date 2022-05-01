<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalisationsTable extends Migration
{
    public function up()
    {
        Schema::create('hospitalisations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('organe')->nullable();
            $table->string('pathologie')->nullable();
            $table->string('type')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
