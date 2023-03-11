<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_navbar_controls', function (Blueprint $table) {
            $table->id();
            $table->string("paragraph");
            $table->string("color");
            $table->string("link");
            $table->boolean("is_active")->comment("0: not-active, 1: active");
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
        Schema::dropIfExists('store_navbar_controls');
    }
};
