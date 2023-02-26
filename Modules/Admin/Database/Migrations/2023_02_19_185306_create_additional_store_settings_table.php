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
        Schema::create('additional_store_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId("store_id")
                ->references("id")
                ->on("stores")
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->boolean("copyright")->default(1)->comment("0: not active, 1: active");
            $table->boolean("activate_the_minimum_order")->default(0)->comment("0: not active, 1: active");
            $table->integer("the_minimum_order")->default(1);
            $table->boolean("biology_activation")->default(0)->comment("0: not active, 1: active");
            $table->boolean("product_pictures_show_one_size")->default(0)->comment("0: not active, 1: active");
            $table->boolean("activate_the_gift_system")->default(0)->comment("0: not active, 1: active");
            $table->boolean("activate_electronic_payment_fees")->default(0)->comment("0: not active, 1: active");
            $table->double("product_default_weight",8,2)->default(0.1)->comment("minimum is 0.1 KG");
            $table->string("commercial_registration_no")->nullable();
            $table->boolean("show_commercial_registration_no")->default(0)->comment("0: not active, 1: active");
            $table->boolean("temporarily_stopping_the_store")->default(0)->comment("0: not active, 1: active");
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
        Schema::dropIfExists('additional_store_settings');
    }
};
