<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('deal_number')->nullable();
            $table->string('full_name')->nullable();
            $table->string('engagement_type')->nullable();
            $table->string('webinar_title')->nullable();
            $table->string('pax_number')->nullable();
            $table->string('doe')->nullable();
            $table->string('dot')->nullable();
            $table->string('ef_customFee')->nullable();
            $table->string('ef_program')->nullable();
            $table->string('ef_programCost')->nullable();
            $table->string('ef_producer')->nullable();
            $table->string('ef_sessions')->nullable();
            $table->string('ef_workingDays')->nullable();
            $table->string('ef_totalStandard')->nullable();
            $table->string('ef_discount')->nullable();
            $table->string('ef_total')->nullable();
            $table->timestamps();
        });
        Schema::drop('staff');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
}