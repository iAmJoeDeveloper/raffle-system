<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('lastName')->nullable()->after('name');
            $table->string('bornDate')->nullable();
            $table->string('sex')->nullable();
            $table->string('documentType')->nullable();
            $table->string('documentNumber')->nullable();
            $table->string('phone')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('lastName');
            $table->dropColumn('bornDate');
            $table->dropColumn('sex');
            $table->dropColumn('documentType');
            $table->dropColumn('documentNumber');
            $table->dropColumn('phone');
        });
    }
}
