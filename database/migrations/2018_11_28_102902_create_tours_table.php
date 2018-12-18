<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('city_id')->unsigned();
            $table->integer('tourcategory_id')->unsigned();
            $table->string('name');
            $table->string('tourstartlocation');
            $table->string('tourdeparturetime');
            $table->string('tourduration');
            $table->string('tourshortdescription');
            $table->string('tourhighlights1');
            $table->string('tourhighlights2');
            $table->string('tourhighlights3');
            $table->text('tourdescription');
            $table->string('whatsinc1');
            $table->string('whatsinc2');
            $table->string('whatsinc3');
            $table->string('tourprice');
            $table->string('tour_img');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('tourcategory_id')->references('id')->on('tour_categories');
            $table->foreign('city_id')->references('id')->on('cities');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
}
