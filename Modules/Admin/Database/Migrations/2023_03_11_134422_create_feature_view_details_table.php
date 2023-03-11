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
        Schema::create('feature_view_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId("feature_view_id")
                ->references("id")
                ->on("feature_views")
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->string("icon");
            $table->string("title");
            $table->string("subtitle");
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
        Schema::dropIfExists('feature_view_details');
    }
};
