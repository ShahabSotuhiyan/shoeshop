<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductVariationController;
use App\Http\Controllers\AttributeController;
use App\Http\Controllers\AttributeValueController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserMetaController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\VariationAttributeController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});




Route::prefix('dashboard')->middleware(['auth'])->group(function () {

    // **Products**
    Route::get('/products', [ProductController::class, 'index']);
    Route::get('/products/create', [ProductController::class, 'create']);
    Route::post('/products', [ProductController::class, 'store']);
    Route::get('/products/{id}', [ProductController::class, 'show']);
    Route::get('/products/edit/{id}', [ProductController::class, 'edit']);
    Route::put('/products/edit/{id}', [ProductController::class, 'update']);
    Route::delete('/products/delete', [ProductController::class, 'destroy']);

    // **Product Variations**
    Route::get('/products/{productId}/variations', [ProductVariationController::class, 'index'])->name('dashboard.product_variations.index');
    Route::post('/products/{productId}/variations', [ProductVariationController::class, 'store'])->name('dashboard.product_variations.store');
    Route::put('/products/{productId}/variations/{id}', [ProductVariationController::class, 'update'])->name('dashboard.product_variations.update');
    Route::delete('/products/{productId}/variations/{id}', [ProductVariationController::class, 'destroy'])->name('dashboard.product_variations.destroy');

    // **Attributes**
    Route::get('/attributes', [AttributeController::class, 'index'])->name('dashboard.attributes.index');
    Route::post('/attributes', [AttributeController::class, 'store'])->name('dashboard.attributes.store');
    Route::put('/attributes/{id}', [AttributeController::class, 'update'])->name('dashboard.attributes.update');
    Route::delete('/attributes/{id}', [AttributeController::class, 'destroy'])->name('dashboard.attributes.destroy');

    // **Attribute Values**
    Route::get('/attributes/{attributeId}/values', [AttributeValueController::class, 'index'])->name('dashboard.attribute_values.index');
    Route::post('/attributes/{attributeId}/values', [AttributeValueController::class, 'store'])->name('dashboard.attribute_values.store');
    Route::put('/attributes/{attributeId}/values/{id}', [AttributeValueController::class, 'update'])->name('dashboard.attribute_values.update');
    Route::delete('/attributes/{attributeId}/values/{id}', [AttributeValueController::class, 'destroy'])->name('dashboard.attribute_values.destroy');

    // **Categories**
    Route::get('/categories', [CategoryController::class, 'index'])->name('dashboard.categories.index');
    Route::post('/categories', [CategoryController::class, 'store'])->name('dashboard.categories.store');
    Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('dashboard.categories.update');
    Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('dashboard.categories.destroy');

    // **Orders**
    Route::get('/orders', [OrderController::class, 'index'])->name('dashboard.orders.index');
    Route::get('/orders/{id}', [OrderController::class, 'show'])->name('dashboard.orders.show');
    Route::post('/orders', [OrderController::class, 'store'])->name('dashboard.orders.store');
    Route::put('/orders/{id}', [OrderController::class, 'update'])->name('dashboard.orders.update');
    Route::delete('/orders/{id}', [OrderController::class, 'destroy'])->name('dashboard.orders.destroy');

    // **Order Items**
    Route::get('/orders/{orderId}/items', [OrderItemController::class, 'index'])->name('dashboard.order_items.index');
    Route::post('/orders/{orderId}/items', [OrderItemController::class, 'store'])->name('dashboard.order_items.store');
    Route::put('/orders/{orderId}/items/{id}', [OrderItemController::class, 'update'])->name('dashboard.order_items.update');
    Route::delete('/orders/{orderId}/items/{id}', [OrderItemController::class, 'destroy'])->name('dashboard.order_items.destroy');

    // **Users**
    Route::get('/users', [UserController::class, 'index'])->name('dashboard.users.index');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('dashboard.users.show');
    Route::post('/users', [UserController::class, 'store'])->name('dashboard.users.store');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('dashboard.users.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('dashboard.users.destroy');

    // **User Meta**
    Route::get('/users/{userId}/meta', [UserMetaController::class, 'index'])->name('dashboard.users_meta.index');
    Route::post('/users/{userId}/meta', [UserMetaController::class, 'store'])->name('dashboard.users_meta.store');
    Route::put('/users/{userId}/meta/{id}', [UserMetaController::class, 'update'])->name('dashboard.users_meta.update');
    Route::delete('/users/{userId}/meta/{id}', [UserMetaController::class, 'destroy'])->name('dashboard.users_meta.destroy');

    // **Carts**
    Route::get('/carts', [CartController::class, 'index'])->name('dashboard.carts.index');
    Route::put('/carts/{id}', [CartController::class, 'update'])->name('dashboard.carts.update');
    Route::delete('/carts/{id}', [CartController::class, 'destroy'])->name('dashboard.carts.destroy');

    // **Cart Items**
    Route::post('/carts/{cartId}/items', [CartItemController::class, 'store'])->name('dashboard.cart_items.store');
    Route::put('/carts/{cartId}/items/{id}', [CartItemController::class, 'update'])->name('dashboard.cart_items.update');
    Route::delete('/carts/{cartId}/items/{id}', [CartItemController::class, 'destroy'])->name('dashboard.cart_items.destroy');

    // **Coupons**
    Route::get('/coupons', [CouponController::class, 'index'])->name('dashboard.coupons.index');
    Route::post('/coupons', [CouponController::class, 'store'])->name('dashboard.coupons.store');
    Route::put('/coupons/{id}', [CouponController::class, 'update'])->name('dashboard.coupons.update');
    Route::delete('/coupons/{id}', [CouponController::class, 'destroy'])->name('dashboard.coupons.destroy');

    // **Payments**
    Route::get('/payments', [PaymentController::class, 'index'])->name('dashboard.payments.index');
    Route::post('/payments', [PaymentController::class, 'store'])->name('dashboard.payments.store');
    Route::put('/payments/{id}', [PaymentController::class, 'update'])->name('dashboard.payments.update');
    Route::delete('/payments/{id}', [PaymentController::class, 'destroy'])->name('dashboard.payments.destroy');

    // **Reviews**
    Route::get('/reviews', [ReviewController::class, 'index'])->name('dashboard.reviews.index');
    Route::post('/reviews', [ReviewController::class, 'store'])->name('dashboard.reviews.store');
    Route::put('/reviews/{id}', [ReviewController::class, 'update'])->name('dashboard.reviews.update');
    Route::delete('/reviews/{id}', [ReviewController::class, 'destroy'])->name('dashboard.reviews.destroy');

    // **Variation Attributes**
    Route::get('/variations/{variationId}/attributes', [VariationAttributeController::class, 'index'])->name('dashboard.variation_attributes.index');
    Route::post('/variations/{variationId}/attributes', [VariationAttributeController::class, 'store'])->name('dashboard.variation_attributes.store');
    Route::put('/variations/{variationId}/attributes/{id}', [VariationAttributeController::class, 'update'])->name('dashboard.variation_attributes.update');
    Route::delete('/variations/{variationId}/attributes/{id}', [VariationAttributeController::class, 'destroy'])->name('dashboard.variation_attributes.destroy');

});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
