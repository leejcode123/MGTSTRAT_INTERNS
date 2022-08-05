<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('company_name', 50);
            $table->string('yr_mnth_sales', 50);
            $table->string('old_id', 50);
            $table->string('sales_pax', 50);
            $table->string('client_class', 50);
            $table->string('industry', 50);
            $table->string('old_new', 50);
            $table->string('first_eng', 50);
            $table->string('second_eng', 50);
            // $table->string('name', 150)->nullable($value = true);
            // $table->string('address', 255)->nullable($value = true);
            // $table->string('address', 255);
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
        Schema::dropIfExists('clients');
    }
}
