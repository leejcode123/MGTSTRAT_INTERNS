<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//Mgtstrat F2f Engagements Evaluation

class CreateMgtstratF2fEngagementsEvaluationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('mgtstrat_f2f_engagements_evaluation', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('mgtstrat_f2f_engagements_evaluation', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->nullable($value = true);
            $table->string('date_of_program', 50)->nullable($value = true);
            $table->string('program_name', 50)->nullable($value = true);
            $table->string('company', 50)->nullable($value = true);
            $table->integer('program_design')->nullable($value = true);
            $table->integer('method_of_delivery')->nullable($value = true);
            $table->integer('logical_and_timely_manner')->nullable($value = true);
            $table->string('like_most', 50)->nullable($value = true);
            $table->string('like_least', 50)->nullable($value = true);
            $table->string('impact_your_work', 50)->nullable($value = true);
            $table->string('management_strategies_lead_facilitator', 50)->nullable($value = true);
            $table->string('name_of_management_strategies_lead_facilitator', 50)->nullable($value = true);
            $table->integer('explained_the_objectives')->nullable($value = true);
            $table->integer('captured_the_audiences_attention_1')->nullable($value = true);
            $table->integer('ensured participants_learning_1')->nullable($value = true);
            $table->integer('built_connection_with_the_audience_1')->nullable($value = true);
            $table->integer('exhibited_strong_facilitator_presence_1')->nullable($value = true);
            $table->string('any_comments_suggestion_feedback_1', 50)->nullable($value = true);
            $table->string('management_strategies_CoFacilitator', 50)->nullable($value = true);
            $table->string('name_of_management_strategies_CoFacilitator', 50)->nullable($value = true);
            $table->string('effectively_guided_the_participants_1', 50)->nullable($value = true);
            $table->integer('captured_the_audiences_attention_2')->nullable($value = true);
            $table->integer('ensured participants_learning_2')->nullable($value = true);
            $table->integer('built_connection_with_the_audience_2')->nullable($value = true);
            $table->integer('exhibited_strong_facilitator_presence_2')->nullable($value = true);
            $table->string('any_comments_suggestion_feedback_2', 50)->nullable($value = true);
            $table->string('how_likely_would_you_recommend_this_management_strat_program', 50)->nullable($value = true);
            $table->string('short_testimonial', 50)->nullable($value = true);
            $table->string('effectively_guided_the_participants_2', 50)->nullable($value = true);
            $table->string('submitted_at', 50)->nullable($value = true);
            $table->string('token', 50)->nullable($value = true);

            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mgtstrat_f2f_engagements_evaluation');
    }
}


