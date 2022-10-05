<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//2022 Mgtstrat BUDGET FORM

class CreateCoachingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('coaching', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('coaching', function (Blueprint $table) {
            
            //ENGAGEMENT FEES
            $table->id();
            $table->string('engagement_fees', 50)->nullable($value = true);
            $table->integer('number_of_coaches_1')->nullable($value = true);
            $table->integer('daily_fees')->nullable($value = true);
            $table->integer('number_of_sessions_al_of_half_days_1')->nullable($value = true);
            $table->string('night_shift_weekends_holidays_1', 50)->nullable($value = true);
            $table->integer('total_fee_1')->nullable($value = true);
            $table->string('notes', 50)->nullable($value = true);

            //ENGAGEMENT COST
            $table->string('engagement_cost', 50)->nullable($value = true);
            $table->integer('number_of_coaches_2')->nullable($value = true);
            $table->integer('session_fees')->nullable($value = true);
            $table->integer('number_of_sessions_al_of_half_days_2')->nullable($value = true);
            $table->string('night_shift_weekends_holidays_2', 50)->nullable($value = true);
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
        Schema::dropIfExists('Coaching');
    }
}


