<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('email')->nullable()->unique();
            $table->datetime('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('remember_token')->nullable();
            $table->datetime('date_naissance')->nullable();
            $table->string('sexe')->nullable();
            $table->string('assurance_medicale')->nullable();
            $table->string('code_assurance')->nullable();
            $table->string('reference_medecin')->nullable();
            $table->string('personne_a_prevenir')->nullable();
            $table->string('telephone_personne_a_prevenir')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
