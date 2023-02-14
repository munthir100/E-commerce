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
        Schema::create('definition_pages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('store_id')
                ->references('id')
                ->on('stores')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->string("title");
            $table->string("description");
<<<<<<< HEAD
            $table->boolean("is_active")->default(1)->comment("1: active, 0: not active");
=======
            $table->boolean("is_active")->default(true);
>>>>>>> 52d78eb0d98869a1ba6b5bfb854f14d43b616f03
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
        Schema::dropIfExists('definition_pages');
    }
};
