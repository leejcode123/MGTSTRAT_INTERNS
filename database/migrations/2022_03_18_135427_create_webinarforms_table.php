<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebinarformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webinarforms', function (Blueprint $table) {
            $table->id();

            //engagement information
            $table->string('deal_number')->nullable();
            $table->string('full_name')->nullable();
            $table->string('engagement_type')->nullable();
            $table->string('webinar_title')->nullable();
            $table->string('pax_number')->nullable();
            $table->string('doe')->nullable();
            $table->string('dot')->nullable();

            //engagement fees
            $table->string('ef_customFee')->nullable();
            $table->string('ef_program')->nullable();
            $table->string('ef_programCost')->nullable();
            $table->string('ef_sessions')->nullable();
            $table->string('ef_workingDays')->nullable();
            $table->string('ef_producer')->nullable();
            $table->string('ef_totalStandard')->nullable();
            $table->string('ef_discount')->nullable();
            $table->string('ef_total')->nullable();

            //engagement cost
            $table->string('ec_sales')->nullable();
            $table->string('ec_refferal')->nullable();
            $table->string('ec_engagementManager')->nullable();
            $table->string('ec_customFee')->nullable();
            $table->string('ec_hours')->nullable();
            $table->string('ec_creatorsFee')->nullable();
            $table->string('creators_hours')->nullable();
            $table->string('ec_lead')->nullable();
            $table->string('lead_hours')->nullable();
            $table->string('lead_nonovertime')->nullable();
            $table->string('ec_moderator')->nullable();
            $table->string('moderator_hour')->nullable();
            $table->string('moderator_nonovertime')->nullable();
            $table->string('ec_producer')->nullable();
            $table->string('producer_hour')->nullable();
            $table->string('producer_nonovertime')->nullable();
            $table->string('ec_programExpense')->nullable();
            $table->string('ec_total')->nullable();
            $table->string('profit')->nullable();
            $table->string('less_percent')->nullable();
            $table->string('net_profit')->nullable();
            $table->string('profit_margin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('webinarforms');
    }
}