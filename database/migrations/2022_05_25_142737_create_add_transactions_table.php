<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('firstName');
            $table->string('transactionDate');
            $table->string('dueDate');
            $table->string('billingaddress');
            $table->string('productServices');
            $table->string('qty');
            $table->string('unitprice');
            $table->string('amount');
            $table->string('discount');
            $table->string('salesTax');
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
        Schema::dropIfExists('add_transactions');
    }
}
