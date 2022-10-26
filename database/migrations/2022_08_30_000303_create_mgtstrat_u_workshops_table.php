<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//2022 Mgtstrat BUDGET FORM

class CreateMgtstratUWorkshopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('mgtstrat_u_workshops', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('mgtstrat_u_workshops', function (Blueprint $table) {
            
            //ENGAGEMENT FEES
            $table->id();
            $table->string('engagement_fees', 50)->nullable($value = true);
            $table->integer('package_fees_excl_vat')->nullable($value = true);
            $table->integer('number_of_sessions')->nullable($value = true);
            $table->string('night_shift_weekends_holidays_1', 50)->nullable($value = true);
            $table->string('total_fee_1')->nullable($value = true);
            $table->string('notes')->nullable($value = true);

            //ENGAGEMENT COST
            $table->string('engagement_cost', 50)->nullable($value = true);
            $table->integer('hourly_fees')->nullable($value = true);
            $table->integer('number_of_hours')->nullable($value = true);
            $table->string('night_shift_weekends_holidays_2', 50)->nullable($value = true);
            $table->string('total_fee_2')->nullable($value = true);
            $table->string('roster')->nullable($value = true);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mgtstrat_u_workshops');
    }
}


