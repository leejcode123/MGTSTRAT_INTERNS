<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//2022 Mgtstrat BUDGET FORM

class CreateCustomizedEngagementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('customized_engagement', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('customized_engagement', function (Blueprint $table) {
            
            //ENGAGEMENT FEES
            $table->id();
            $table->string('engagement_fees', 50)->nullable($value = true);
            $table->integer('number_of_consultants_1')->nullable($value = true);
            $table->integer('hourly_fees_1')->nullable($value = true);
            $table->integer('number_of_hours_1')->nullable($value = true);
            $table->string('night_shift_weekends_holidays_1', 50)->nullable($value = true);
            $table->string('total_fee_1')->nullable($value = true);
            $table->string('notes')->nullable($value = true);

            //ENGAGEMENT COST
            $table->string('engagement_cost', 50)->nullable($value = true);
            $table->integer('number_of_consultants_2')->nullable($value = true);
            $table->integer('hourly_fees_2')->nullable($value = true);
            $table->integer('number_of_hours_2')->nullable($value = true);
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
        Schema::dropIfExists('customized_engagement');
    }
}


