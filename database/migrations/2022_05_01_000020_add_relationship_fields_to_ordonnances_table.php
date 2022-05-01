<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToOrdonnancesTable extends Migration
{
    public function up()
    {
        Schema::table('ordonnances', function (Blueprint $table) {
            $table->unsignedBigInteger('consultation_id')->nullable();
            $table->foreign('consultation_id', 'consultation_fk_6521380')->references('id')->on('consultations');
        });
    }
}
