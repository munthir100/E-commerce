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
        Schema::create('envoys', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('shipping_cost');
            $table->boolean('cash_on_delivery_cost')->default(false);
            $table->date('expected_delivery_time');
            $table->boolean('in_store')->default(true);


            $table->foreignId('city_id')
                ->nullable()
                ->references('id')
                ->on('cities')
                ->nullOnDelete();

            $table->foreignId('store_id')
                ->references('id')
                ->on('stores')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

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
        Schema::dropIfExists('envoys');
    }
};
