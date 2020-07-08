<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('raffle_id')->unsigned();
            $table->integer('commerce_id')->unsigned();
            $table->bigInteger('customer_id')->unsigned();
            $table->integer('paymentMethod_id')->unsigned();
            $table->integer('bank_id')->unsigned()->nullable();
            $table->integer('card_id')->unsigned()->nullable();
            $table->integer('cardNumber')->nullable();
            $table->float('amount');
            $table->string('invoiceNumber');
            $table->string('invoiceDate');
            $table->string('image');
            $table->timestamps();

            //Referencias
            $table->foreign('raffle_id')->references('id')->on('raffles')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('commerce_id')->references('id')->on('commerces')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('customer_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('paymentMethod_id')->references('id')->on('payment_methods')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('bank_id')->references('id')->on('banks')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('card_id')->references('id')->on('cards')
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
        Schema::dropIfExists('invoices');
    }
}
