<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCryptoTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crypto_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('txhash');
            $table->string('block');
            $table->string('from');
            $table->string('to');
            $table->string('age');
            $table->string('value');
            $table->string('txfee');

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
        Schema::dropIfExists('crypto_transactions');
    }
}
