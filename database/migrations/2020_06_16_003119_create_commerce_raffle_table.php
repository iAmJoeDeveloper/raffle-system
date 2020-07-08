<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommerceRaffleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commerce_raffle', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('commerce_id')->unsigned();
            $table->integer('raffle_id')->unsigned();

            $table->timestamps();

            $table->foreign('commerce_id')->references('id')->on('commerces')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('raffle_id')->references('id')->on('raffles')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commerce_raffle');
    }
}
