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
            $table->string('number',16);
            $table->string('purchase_date');
            $table->decimal('total_price', 10, 2);
            $table->enum('payment_status', ['1', '2', '3', '4'])->comment('1=menunggu pembayaran, 2=sudah dibayar, 3=kadaluarsa, 4=batal');
            $table->string('snap_token', 36)->nullable();

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
