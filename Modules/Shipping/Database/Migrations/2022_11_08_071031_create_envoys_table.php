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
            $table->timestamps();

            $table->foreignId('city_id')
                ->references('id')
                ->on('cities')
                ->nullOnDelete();

            $table->foreignId('user_id')
                ->references('id')
                ->on('users')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
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
