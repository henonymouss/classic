<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommercialInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commercial_invoices', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('chassis_no');
            $table->string('origin');
            $table->integer('model');
            $table->double('unit_price');
            $table->double('total_fob_price');
            $table->string('shipment');
            $table->string('payment');
            $table->string('bank_detail');
            $table->string('account_number');
            $table->string('cust');
            $table->string('ibran_number');
            $table->string('swift_code');
            $table->string('validity');
            $table->string('port_of_loading');
            $table->string('final_destination');
            $table->string('original_file');
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
        Schema::dropIfExists('commercial_invoices');
    }
}
