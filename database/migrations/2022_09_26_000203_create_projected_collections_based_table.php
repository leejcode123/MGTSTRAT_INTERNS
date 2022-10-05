<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//2022 CASH POSITION

class CreateProjectedCollectionsBasedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('collections_based', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('projected_collections_based', function (Blueprint $table) {
            $table->id();
            $table->string('projected_collections_based_on_invoices', 50)->nullable($value = true);
            $table->string('program', 50)->nullable($value = true);
            $table->string('due_payable', 50)->nullable($value = true);
            $table->integer('total')->nullable($value = true);
            $table->integer('term')->nullable($value = true);
            $table->integer('days_OverDue')->nullable($value = true);
            $table->string('remarks', 50)->nullable($value = true);
            $table->string('projected_expenses', 50)->nullable($value = true);
           
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projected_collections_based');
    }
}


