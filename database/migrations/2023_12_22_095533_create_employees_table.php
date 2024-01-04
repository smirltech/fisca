<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 30);   //Prenom
            $table->string('last_name', 30);    //Nom
            $table->string('middle_name', 30)->nullable();  //Nom du pere
            $table->string('gender', 2);
            $table->string('email', 100)->unique();
            $table->string('phone_number', 30)->unique()->nullable();
            $table->string('department', 100);
            $table->string('photo', 100);
            $table->string('matriculate', 20);
            $table->string('commune', 30);  //Commune
            //salaire de base exprimee en heures de travail
            $table->integer('base_salary'); //Salaire de base
            $table->boolean('payed')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
