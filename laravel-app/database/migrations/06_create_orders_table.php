<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('shipping_address_id');
            $table->decimal('total_price');
            $table->enum('payment_info', ['on_delivery', 'bank_transfer', 'online']);
            $table->string('phone_number', 15);
            $table->string('email', 256);
            $table->enum('status', ['sent_payed', 'sent_awaiting_payment', 'delivered', 'cancelled', 'refunded', 'partially_refunded']);
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('shipping_address_id')->references('id')->on('shipping_addresses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

