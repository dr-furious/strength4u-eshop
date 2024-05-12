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
        Schema::create("orders", function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id")->nullable();
            $table->decimal("total_price");
            $table->enum("payment_method", ["cash_on_delivery", "bank_transfer", "online_card_payment"]);
            $table->enum("shipping_method", ["sps", "dhl", "packeta"]);
            $table->string("phone_number", 15);
            $table->string("email", 256);
            $table->string("name", 50);
            $table->string("country", 90);
            $table->string("city", 190);
            $table->string("street", 100);
            $table->string("zip_code", 18);
            $table->enum("status", ["new", "sent_payed", "sent_awaiting_payment", "delivered", "cancelled", "refunded", "partially_refunded"]);
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign("user_id")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("orders");
    }
};
