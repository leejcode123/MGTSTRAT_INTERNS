<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//2022 Mgtstrat BUDGET FORM

class CreateSubcontractedWorkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('subcontracted_work', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('subcontracted_work', function (Blueprint $table) {
            
            //ENGAGEMENT FEES
            $table->id();
            $table->string('engagement_fees', 50)->nullable($value = true);
            $table->integer('number_units_if_applicable_1')->nullable($value = true);
            $table->integer('cost_per_job_unit_1')->nullable($value = true);
            $table->integer('20_percent_markUp_minimum')->nullable($value = true);
            $table->integer('total_fee_1')->nullable($value = true);
            $table->string('notes_1', 50)->nullable($value = true);

            //ENGAGEMENT COST
            $table->string('engagement_cost', 50)->nullable($value = true);
            $table->integer('number_units_if_applicable_2')->nullable($value = true);
            $table->integer('cost_per_job_unit_2')->nullable($value = true);
            $table->integer('total_fee_2')->nullable($value = true);
            $table->string('notes_2', 50)->nullable($value = true);

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcontracted_work');
    }
}


