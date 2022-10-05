<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//2022 Mgtstrat BUDGET FORM

class CreateF2fEngagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('f2f_engagements', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('f2f_engagements', function (Blueprint $table) {
            
            //ENGAGEMENT FEES
            $table->id();
            $table->string('engagement_fees', 50)->nullable($value = true);
            $table->integer('number_of_consultants_1')->nullable($value = true);
            $table->integer('per_day_fees_1')->nullable($value = true);
            $table->integer('number_of_days_1')->nullable($value = true);
            $table->integer('additional_travel_days_1')->nullable($value = true);
            $table->string('out_of_town_weekends_holidays_1', 50)->nullable($value = true);
            $table->integer('total_fee_1')->nullable($value = true);
            $table->string('notes', 50)->nullable($value = true);

            //ENGAGEMENT COST
            $table->string('engagement_cost', 50)->nullable($value = true);
            $table->integer('number_of_consultants_2')->nullable($value = true);
            $table->integer('per_day_fees_2')->nullable($value = true);
            $table->integer('number_of_days_2')->nullable($value = true);
            $table->integer('additional_travel_days_2')->nullable($value = true);
            $table->string('out_of_town_weekends_holidays_2', 50)->nullable($value = true);
            $table->integer('total_fee_2')->nullable($value = true);
            $table->string('roster', 50)->nullable($value = true);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('f2f_engagements');
    }
}


