<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//MGTSTRAT Database & Mailing List

class CreateApril2021Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('april_2021', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('april_2021', function (Blueprint $table) {
            $table->id();
            $table->string('last_name', 50)->nullable($value = true);
            $table->string('first_name', 50)->nullable($value = true);
            $table->string('middle_name', 50)->nullable($value = true);
            $table->string('nickname', 50)->nullable($value = true);
            $table->string('level', 50)->nullable($value = true);
            $table->string('status', 50)->nullable($value = true);
            $table->string('mgtstrat_asiaCom', 50)->nullable($value = true);
            $table->string('alternate_email', 50)->nullable($value = true);
            $table->string('mobile_number', 50)->nullable($value = true);
            $table->string('home_address', 50)->nullable($value = true);
            $table->string('birthday', 50)->nullable($value = true);
            $table->string('bank', 50)->nullable($value = true);
            $table->string('account_number', 50)->nullable($value = true);
            $table->string('tin', 50)->nullable($value = true);
            $table->string('contact_person', 50)->nullable($value = true);
            $table->string('contact_number', 50)->nullable($value = true);

            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('april_2021');
    }
}


