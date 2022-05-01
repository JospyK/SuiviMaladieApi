<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToExamenTable extends Migration
{
    public function up()
    {
        Schema::table('examen', function (Blueprint $table) {
            $table->unsignedBigInteger('consultation_id')->nullable();
            $table->foreign('consultation_id', 'consultation_fk_6521431')->references('id')->on('consultations');
        });
    }
}
