<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderMidtransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_midtrans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('penjadwalan_id')->nullable();
            $table->string('user_id')->nullable();
            $table->string('transaction_id')->default(0);;
            $table->string('purchase_date');
            $table->decimal('amount', 20, 2)->default(0);;
            $table->string('status')->default('pending');
            $table->string('snap_token')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_midtrans');
    }
}
