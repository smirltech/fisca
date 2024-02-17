<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payrolls', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->references('id')->on('employees');
            $table->integer('order_number'); // Numéro d'ordre du travailleur
            $table->string('employee_name'); // Noms et Prénoms du Travailleur
            $table->string('job_category'); // Emploi et Catégorie
            $table->string('social_security_number'); // Numéro d'immatriculation à la Sécurité Sociale
            $table->decimal('salary', 10, 2); // Salaire
            $table->string('rate_type'); // Taux (Jour, Heure, Mois)
            $table->decimal('salaries_paid_at_100', 10, 2); // Salaires payés à 100%
            $table->decimal('total_due', 10, 2); // Total dû
            $table->integer('overtime_hours'); // Heures supplémentaires
            $table->decimal('overtime_rate', 5, 2); // Taux heures supplémentaires
            $table->decimal('overtime_total_due', 10, 2); // Total dû pour les heures supplémentaires
            $table->decimal('supplement_due', 10, 2); // Supplément dû pour travail du samedi, dimanche, et jours fériés
            $table->decimal('primes', 10, 2); // Primes
            $table->decimal('miscellaneous', 10, 2); // Divers
            $table->integer('paid_leave_days'); // Congés payés
            $table->decimal('paid_leave_rate', 5, 2); // Taux pour les jours de congés payés
            $table->decimal('paid_leave_total_due', 10, 2); // Total dû pour les jours de congés payés
            $table->integer('sickness_or_accident_days'); // Maladie ou accident
            $table->decimal('sickness_or_accident_rate', 5, 2); // Taux pour les jours de maladie ou accident
            $table->decimal('sickness_or_accident_total_due', 10, 2); // Total dû pour les jours de maladie ou accident
            $table->decimal('total_gross_due', 10, 2); // Total brut dû
            $table->decimal('pension_deduction', 10, 2); // Déduction pour pension
            $table->decimal('compensation_deductions', 10, 2); // Indemnités compensatrices
            $table->decimal('advances', 10, 2); // Avances
            $table->decimal('other_deductions', 10, 2); // Diverses déductions
            $table->decimal('tax_withholding', 10, 2); // Retenue fiscale
            $table->decimal('total_deductions', 10, 2); // Total des déductions
            $table->integer('children_beneficiary_count'); // Nombre d'enfants bénéficiaires
            $table->integer('family_allowance_days'); // Nombre de jours pour les allocations familiales
            $table->decimal('family_allowance_rate', 5, 2); // Taux journalier pour les allocations familiales
            $table->decimal('family_allowance_total_due', 10, 2); // Total dû pour les allocations familiales
            $table->decimal('net_pay', 10, 2); // Net à payer
            $table->decimal('inss_contribution_base', 10, 2); // Montant pris en considération pour le calcul des cotisations INSS
            $table->text('observations')->nullable(); // Observations
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payrolls');
    }
};
