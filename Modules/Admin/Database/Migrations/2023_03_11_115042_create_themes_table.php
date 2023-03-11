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
        Schema::create('themes', function (Blueprint $table) {
            $table->id();
            $table->string("path");
            $table->string("name");
            $table->double("price",8,2);
            $table->foreignId("country_id")
            ->references("id")
            ->on("countries")
            ->cascadeOnUpdate()
            ->cascadeOnDelete(); // price in general country // useful to convert
            $table->boolean("is_active")->comment("0: not-active, 1: active");
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
        Schema::dropIfExists('themes');
    }
};
