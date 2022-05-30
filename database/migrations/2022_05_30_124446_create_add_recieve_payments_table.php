<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddRecievePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_recieve_payments', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('firstName');
            $table->string('reference');
            $table->string('paymentDate');
            $table->string('paymentMethod');
            $table->string('depositTo');
            $table->string('billingAddress');
            $table->string('voucher_Data');
            $table->string('totalAmount');
            $table->string('particulars');
            $table->string('file');
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
        Schema::dropIfExists('add_recieve_payments');
    }
}
