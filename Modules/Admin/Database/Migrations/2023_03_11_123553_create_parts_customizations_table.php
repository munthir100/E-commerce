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
        Schema::create('parts_customizations', function (Blueprint $table) {
            $table->id();
            $table->foreignId("store_id")
                ->references("id")
                ->on("stores")
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->morphs("customizable");
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
        Schema::dropIfExists('parts_customizations');
    }
};
