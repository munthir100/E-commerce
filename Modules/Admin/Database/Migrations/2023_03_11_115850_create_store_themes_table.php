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
        Schema::create('store_themes', function (Blueprint $table) {
            $table->id();
            $table->foreignId("store_id")
                ->references("id")
                ->on("stores")
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId("theme_id")
                ->references("id")
                ->on("themes")
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->double("purchase_price",8,2);
            $table->boolean("is_active")->comment("0: not-active, 1: active (at most one active for user)");
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
        Schema::dropIfExists('store_themes');
    }
};
