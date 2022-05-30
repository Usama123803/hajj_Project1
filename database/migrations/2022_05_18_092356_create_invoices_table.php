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
            $table->id();
             $table->string('customername');
              $table->string('tranctiondate');
               $table->string('duedate');
                $table->string('billingaddress');
                 $table->string('packagename');
                  $table->string('noofpax');
                   $table->string('unitprice');
                    $table->string('amount');
                    $table->string('tax');
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
        Schema::dropIfExists('invoices');
    }
}
