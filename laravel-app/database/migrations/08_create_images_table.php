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
        Schema::create("images", function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("product_id");
            $table->string("name", 64); //->unique();
            $table->boolean("is_main")->default(false);
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign("product_id")->references("id")->on("products");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("images");
    }
};
