<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToLeagueScoringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('league_scorings', function (Blueprint $table) {
            $table->integer('league_id')->unsigned();
            $table->integer('scoring_criteria_id')->unsigned();

            $table->foreign('league_id')
                ->references('id')
                ->on('leagues');

            $table->foreign('scoring_criteria_id')
                ->references('id')
                ->on('scoring_criterias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('league_scorings', function (Blueprint $table) {
            $table->dropColumn(['league_id', 'scoring_criteria_id']);
        });
    }
}
