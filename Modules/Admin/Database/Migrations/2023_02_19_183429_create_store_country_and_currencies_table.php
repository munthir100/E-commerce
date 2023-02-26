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
        Schema::create('store_country_and_currencies', function (Blueprint $table) {
            $table->id();
            $table->foreignId("store_id")
                ->references("id")
                ->on("stores")
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreignId("country_id")
                ->references("id")
                ->on("countries")
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->boolean("is_active")->default(1)->comment("0: not active, 1: active");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_country_and_currencies');
    }
};
