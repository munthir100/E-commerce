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
            $table->string("store_link");
            $table->morphs("customizable");
            $table->timestamps();
            $table->foreign("store_link")
                ->references("store_link")
                ->on("stores")
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
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
