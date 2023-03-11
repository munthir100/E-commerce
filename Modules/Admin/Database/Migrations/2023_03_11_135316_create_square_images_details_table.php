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
        Schema::create('square_images_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId("square_image_id")
                ->references("id")
                ->on("square_images")
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->string("path");
            $table->string("path_type")->default(0)->comment("0: internal, 1: external");;
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
        Schema::dropIfExists('square_images_details');
    }
};
