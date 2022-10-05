<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//CONSULTANT REVENUE TRACKER

class CreateSummaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('summary', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('summary', function (Blueprint $table) {
            
        //MANAGEMENT TEAM SUPPORT PAYMENT SUMMARY
            $table->id();
            $table->string('2022', 50)->nullable($value = true);
            $table->string('role', 50)->nullable($value = true);
            $table->integer('jan')->nullable($value = true);
            $table->integer('feb')->nullable($value = true);
            $table->integer('mar')->nullable($value = true);
            $table->integer('apr')->nullable($value = true);
            $table->integer('may')->nullable($value = true);
            $table->integer('june')->nullable($value = true);
            $table->integer('july')->nullable($value = true);
            $table->integer('august')->nullable($value = true);
            $table->integer('september')->nullable($value = true);
            $table->integer('october')->nullable($value = true);
            $table->integer('november')->nullable($value = true);
            $table->integer('december')->nullable($value = true);
            $table->integer('total_gross')->nullable($value = true);
            $table->integer('ewt')->nullable($value = true);
            $table->integer('net')->nullable($value = true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('summary');
    }
}


