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
        Schema::create('profil_desas', function (Blueprint $table) {
            $table->uuid('pd_id');
            $table->string('pd_nama');
            $table->string('pd_alamat');
            $table->text('pd_visi');
            $table->text('pd_misi');
            $table->text('pd_sejarah')->nullable();
            $table->foreignUuid('pd_us_id');
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
        Schema::dropIfExists('profil_desas');
    }
};