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
        Schema::create('pay_slips', function (Blueprint $table) {
            $table->id();

            $table->integer('employee_id');
            $table->integer('cost_of_living_allowance');    //Indemnité de vie chère
            $table->integer('bonus');                    //Prime
            $table->integer('gratuity');             //Gratification
            $table->integer('leave_allowance');     //Indemnité de congé
            $table->integer('commission');        //Commission
            $table->integer('other_allowances');    //Autres indemnités

            $table->string('fringe_benefit');   //Avantage en nature

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pay_slips');
    }
};
