<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("product_order_details", function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("order_id");
            $table->unsignedBigInteger("product_id");
            $table->unsignedBigInteger("size_id");
            $table->unsignedBigInteger("flavour_id");
            $table->decimal("price_in_dollars");
            $table->unsignedInteger("discount_percentage")->default(0);
            $table->unsignedInteger("quantity");
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign("order_id")->references("id")->on("orders");
            $table->foreign("product_id")->references("id")->on("products");
            $table->foreign("size_id")->references("id")->on("sizes");
            $table->foreign("flavour_id")->references("id")->on("flavours");

            // Define unique constraint for 4 attributes
            $table->unique(["order_id", "product_id", "size_id", "flavour_id"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("product_order_details");
    }
};
