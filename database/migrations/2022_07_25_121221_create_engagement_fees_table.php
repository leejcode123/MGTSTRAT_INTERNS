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
            $table->unsignedBigInteger('cstmzd_eng_form_id');
            $table->string('type')->nullable();
            $table->integer('consultant_num')->nullable();
            $table->float('hour_fee')->nullable();
            $table->float('hour_num')->nullable();
            $table->float('nswh')->nullable();
            $table->string('notes')->nullable();
            $table->foreign('cstmzd_eng_form_id')
                ->references('id')
                ->on('customized_engagement_forms')
                ->onDelete('cascade');
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
