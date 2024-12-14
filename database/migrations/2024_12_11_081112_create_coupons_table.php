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
        Schema::create('coupon', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->decimal('amount', 10, 2)->default(0);
            $table->decimal('discount_percent', 5, 2)->default(0);
            $table->integer('max_use')->default(1);
            $table->integer('use_count')->default(0);
            $table->date('valid_from');
            $table->date('valid_until');
            $table->decimal('min_order_amount', 10, 2)->default(0);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupon');
    }
};
