<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontak_desas', function (Blueprint $table) {
            $table->uuid('kd_id')->primary();
            $table->string('kd_nama');
            $table->string('kd_email');
            $table->string('kd_notlp');
            $table->string('kd_alamat');
            $table->foreignUuid('kd_us_id');
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
        Schema::dropIfExists('kontak_desas');
    }
};