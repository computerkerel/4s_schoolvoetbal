<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWedstrijdenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wedstrijden', function (Blueprint $table) {
            $table->id();
            $table->integer('score_team1')->nullable();
            $table->integer('score_team2') ->nullable();
            $table->string('title');
            $table->text('status');
            $table->foreignId('team1')
                ->references('id')
                ->on('teams');

            $table->foreignId('team2')
                ->references('id')
                ->on('teams');

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
