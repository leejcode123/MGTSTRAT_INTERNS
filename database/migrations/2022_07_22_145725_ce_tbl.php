<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CeTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customized_engagement_forms', function (Blueprint $table) {
            $table->id();
            $table->string('status')->nullable();
            $table->string('customized_type')->nullable();
            $table->string('ga_percent')->nullable();
            $table->string('client')->nullable();
            $table->string('engagement_title')->nullable();
            $table->integer('pax_number')->nullable();
            $table->string('program_dates')->nullable();
            $table->string('program_start_time')->nullable();
            $table->string('program_end_time')->nullable();
            $table->string('cluster')->nullable();
            $table->string('core_area')->nullable();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customized_engagement_forms');
        Schema::dropIfExists('engagement_fees');
    }
}
