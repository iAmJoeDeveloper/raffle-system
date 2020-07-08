<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prizes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('raffle_id')->unsigned();
            $table->integer('prizeGroup_id')->unsigned();
            $table->string('name');
            $table->string('description');
            $table->integer('quantity');
            $table->decimal('value');
            $table->enum('status',['ACTIVE','INACTIVE'])->default('ACTIVE');

            $table->timestamps();

            //Relations
            $table->foreign('raffle_id')->references('id')->on('raffles')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('prizeGroup_id')->references('id')->on('prizeGroups')
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
        Schema::dropIfExists('prizes');
    }
}
