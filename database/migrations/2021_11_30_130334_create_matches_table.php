<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->integer('score_team1')->nullable();
            $table->integer('score_team2')->nullable();
            $table->string('title');
            $table->text('status')->nullable();

            $table->foreignId('team1_id')
                ->references('id')
                ->on('teams')
                ->onDelete('cascade');

            $table->foreignId('team2_id')
                ->references('id')
                ->on('teams')
                ->onDelete('cascade');

            $table->dateTime('datum');
            $table->string('scheidsrechter');
            $table->string('locatie');
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
        Schema::dropIfExists('wedstrijden');
    }
}
