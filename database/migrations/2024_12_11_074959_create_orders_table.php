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
            $table->decimal('total_amount', 10, 2); 
            $table->foreignId('coupon_id')->nullable()->constrained('coupons')->onDelete('set null');
            // $table->decimal('coupon_amount', 10, 2)->default(0); 
            // $table->decimal('shipping_cost', 10, 2)->default(0);
            $table->decimal('coupon_amount', 10, 2)->default(0);
            $table->decimal('shipping_cost', 10, 2)->default(0);
            $table->string('shipping_location');
            $table->string('shipping_phone');
            $table->string('payment_method');
            $table->string('payment_status')->default('pending');
            $table->timestamp('delivery_time')->nullable();
            $table->text('notes')->nullable();
            $table->json('actions_date')->nullable(); 
            $table->timestamps();
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
