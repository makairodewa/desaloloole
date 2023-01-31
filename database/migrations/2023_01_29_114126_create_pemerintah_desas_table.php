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
        Schema::create('pemerintah_desas', function (Blueprint $table) {
            $table->uuid('pmd_id');
            $table->string('pmd_nama')->unique();
            $table->string('pmd_jabatan');
            $table->string('pmd_photo')->nullable();
            $table->string('pmd_notlp')->nullable();
            $table->string('pmd_fb')->nullable();
            $table->string('pmd_wa')->nullable();
            $table->string('pmd_ig')->nullable();
            $table->foreignUuid('pmd_us_id');
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
        Schema::dropIfExists('pemerintah_desas');
    }
};