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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('sku')->nullable();
            $table->string('quantity')->nullable();
            $table->string('wheight')->nullable();
            $table->string('short_description', 20)->nullable();
            $table->string('description')->nullable();
            $table->string('price');
            $table->string('cost')->nullable();
            $table->string('discount')->nullable();
            $table->string('free_shipping')->default(false);
            $table->string('is_active')->default(true);
            $table->timestamps();

            $table->foreignId('category_id')
                ->references('id')
                ->on('categories')
                ->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
