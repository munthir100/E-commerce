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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->date('birth_date')->nullable();
            $table->string('gender')->nullable();
            $table->string('description')->nullable();
            $table->integer('number_of_orders')->default(0);


            $table->foreignId('city_id')
                ->nullable()
                ->references('id')
                ->on('cities')
                ->nullOnDelete();

            $table->foreignId('user_id')
                ->nullable()
                ->references('id')
                ->on('users')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

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
        Schema::dropIfExists('clients');
    }
};
