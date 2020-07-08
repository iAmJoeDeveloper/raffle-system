<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parameters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('raffle_id')->unsigned();
            $table->integer('condition_id')->unsigned();
            $table->string('value');
            $table->integer('aditionalTickets');
            $table->enum('status',['ACTIVE','INACTIVE'])->default('ACTIVE');

            $table->timestamps();

            //Relations
            $table->foreign('raffle_id')->references('id')->on('raffles')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('condition_id')->references('id')->on('conditions')
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
        Schema::dropIfExists('parameters');
    }
}
