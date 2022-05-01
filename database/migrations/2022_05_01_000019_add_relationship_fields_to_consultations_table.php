<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToConsultationsTable extends Migration
{
    public function up()
    {
        Schema::table('consultations', function (Blueprint $table) {
            $table->unsignedBigInteger('patient_id')->nullable();
            $table->foreign('patient_id', 'patient_fk_6521390')->references('id')->on('users');
            $table->unsignedBigInteger('medecin_id')->nullable();
            $table->foreign('medecin_id', 'medecin_fk_6521391')->references('id')->on('users');
        });
    }
}
