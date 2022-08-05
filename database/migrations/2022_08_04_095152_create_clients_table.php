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
            $table->string('company_name', 50)->nullable($value = true);
            $table->string('yr_mnth_sales')->nullable($value = true);
            $table->string('old_id', 50)->nullable($value = true);
            $table->string('sales_pax', 50)->nullable($value = true);
            $table->string('client_class', 50)->nullable($value = true);
            $table->string('industry', 50)->nullable($value = true);
            $table->string('old_new', 50)->nullable($value = true);
            $table->string('first_eng')->nullable($value = true);
            $table->string('second_eng')->nullable($value = true);
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
