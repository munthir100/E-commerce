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
        Schema::create('vats', function (Blueprint $table) {
            $table->id();
            $table->foreignId("store_id")
                ->references("id")
                ->on("stores")
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
           
            $table->foreignId("country_id")
                ->references("id")
                ->on("countries")
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->double("vat_value", 8, 2);
            $table->boolean("tax_on_shipping_services")->default(0)->comment("0: not active, 1: active");
            $table->boolean("view_product_price_with_tax")->default(0)->comment("0: not active, 1: active");
            $table->boolean("is_active")->default(1)->comment("0: not active, 1: active");
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
        Schema::dropIfExists('v_a_ts');
    }
};
