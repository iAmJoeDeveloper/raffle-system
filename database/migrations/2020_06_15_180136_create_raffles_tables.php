<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRafflesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raffles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('branchOffices_id')->unsigned();

            $table->string('name');
            $table->string('description')->nullable();
            $table->string('start');
            $table->string('end')->nullable();
            $table->string('voucherMessage');
            $table->enum('status', ['ACTIVE', 'INACTIVE'])->default('ACTIVE');
            $table->string('image')->nullable();

            $table->timestamps();

            //Relations
            $table->foreign('branchOffices_id')->references('id')->on('branchOffices')
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
        Schema::dropIfExists('raffles');
    }
}
