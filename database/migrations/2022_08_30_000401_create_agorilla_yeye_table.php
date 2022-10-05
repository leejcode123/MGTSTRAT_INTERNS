<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//CONSULTANT REVENUE TRACKER

class CreateAgorillaYeyeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('agorilla_yeye', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('agorilla_yeye', function (Blueprint $table) {
            $table->id();
        
            $table->string('payment_date', 50)->nullable($value = true);
            $table->integer('or_no')->nullable($value = true);
            $table->string('engagement', 50)->nullable($value = true);
            $table->integer('contract_fee')->nullable($value = true);
            $table->integer('ewt')->nullable($value = true);
            $table->integer('total_amount_deposited')->nullable($value = true);
            $table->string('role_1', 20)->nullable($value = true);
            $table->string('role_2', 20)->nullable($value = true);
            $table->string('role_3', 20)->nullable($value = true);
            $table->string('role_4', 20)->nullable($value = true);
            $table->string('role_5')->nullable($value = true);
            $table->string('remarks', 20)->nullable($value = true);
            $table->integer('or')->nullable($value = true);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agorilla_yeye');
    }
}


