<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheidsrechtersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scheidsrechters', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('naam');



            $table->foreignId('users_id')
                ->references('id')
                ->on('users');




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scheidsrechters');
    }
}
