<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//CONSULTANT REVENUE TRACKER

class CreateZaballeroMiggyCrtTable extends Migration 
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('zaballero_miggy_crt', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('zaballero_miggy_crt', function (Blueprint $table) {
            $table->id();
        
            $table->string('engagement_date', 50)->nullable($value = true);
            $table->integer('or_no')->nullable($value = true);
            $table->string('engagement', 50)->nullable($value = true);
            $table->integer('contract_fee')->nullable($value = true);
            $table->integer('tax_withheld')->nullable($value = true);
            $table->integer('total_amount_deposited')->nullable($value = true);
            $table->integer('date_deposited')->nullable($value = true);
            $table->string('role_1', 20)->nullable($value = true);
            $table->string('role_2', 20)->nullable($value = true);
            $table->string('role_3', 20)->nullable($value = true);
            $table->string('others', 20)->nullable($value = true);
 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zaballero_miggy_crt');
    }
}



