<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjadwalansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjadwalans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('date');
            $table->string('timestart');
            $table->string('timeend');
            $table->string('tutor_id')->default('1');
            $table->string('topic_id')->default('1');
            $table->string('jabatan_id')->default('2');
            $table->string('price');
            $table->string('link_zoom')->nullable();
            $table->string('foto');
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjadwalans');
    }
}
