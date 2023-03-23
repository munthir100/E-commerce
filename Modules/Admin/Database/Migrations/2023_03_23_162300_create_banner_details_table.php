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
        Schema::create('banner_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId("banner_id")
                ->references("id")
                ->on("banners")
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->string("path");
            $table->boolean("path_type")->default(0)->comment("0: internal, 1: external");
            $table->tinyInteger("panner_type")->comment("0: animated, 1: wide rectangle, 2: rectangle");
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
        Schema::dropIfExists('banner_details');
    }
};
