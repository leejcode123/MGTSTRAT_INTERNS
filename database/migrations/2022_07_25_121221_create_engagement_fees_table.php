<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEngagementFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('engagement_fees', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('engagement_fees', function (Blueprint $table) {
            $table->id();
            $table->string('cstmzd_eng_form_id', 15);
            $table->string('type', 50)->nullable();
            $table->integer('consultant_num')->nullable();
            $table->string('hour_fee', 30)->nullable();
            $table->integer('hour_num')->nullable();
            $table->integer('nswh')->nullable();
            $table->string('notes')->nullable();
            // $table->foreign('cstmzd_eng_form_id')
            //     ->references('id')
            //     ->on('customized_engagement_forms')
            //     ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('engagement_fees');
    }
}
