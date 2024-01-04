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
        Schema::create('cnss_data', function (Blueprint $table) {
            $table->id();
            $table->string('social_security_number', 20)->unique(); //Matricule CNSS

            $table->integer('employee_id');
            $table->integer('type_of_worker')->default(1);  //Type de travailleur
            $table->integer('contributed_amount');  //Montant cotisé
            $table->integer('number_of_workdays');  //Nombre de jours travaillés
            $table->integer('number_of_work_hours');    //Nombre d'heures travaillées
            $table->integer('gross_taxable_amount');    //Montant brut imposable

            $table->date('contributed_period'); //Période cotisée
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
