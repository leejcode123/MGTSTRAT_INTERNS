<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//CONSULTANT REVENUE TRACKER

class CreateCruzPiaTable extends Migration 
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('cruz_pia', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('cruz_pia', function (Blueprint $table) {
            $table->id();
        
            $table->string('payment_date', 50)->nullable($value = true);
            $table->string('engagement', 50)->nullable($value = true);
            $table->integer('contract_fee')->nullable($value = true);
            $table->integer('ewt')->nullable($value = true);
            $table->integer('vat_exempt_sales')->nullable($value = true);
            $table->integer('total_amount_deposited')->nullable($value = true);
            $table->string('role', 20)->nullable($value = true);
            $table->string('paid', 20)->nullable($value = true);
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
        Schema::dropIfExists('cruz_pia');
    }
}


