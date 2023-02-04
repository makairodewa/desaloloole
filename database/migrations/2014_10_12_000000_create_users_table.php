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
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('us_id')->primary();
            $table->string('us_name');
            $table->string('us_photo')->nullable();
            $table->string('us_email')->unique();
            $table->timestamp('us_email_verified_at')->nullable();
            $table->string('password');
            $table->foreignUuid('rs_id');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
