<?php

use App\Models\Cart;
use App\Models\Eatery;
use App\Models\User;
use Illuminate\Support\Str;

test('an admin can update the status of every item in an order', function () {
    $admin = User::factory()->create(['role' => 'admin']);
    $eatery = Eatery::create([
        'name' => 'Test meal',
        'sku' => Str::uuid()->toString(),
        'price' => 25,
        'image' => 'test-meal.jpg',
        'description' => 'A test meal',
    ]);

    $firstItem = Cart::create([
        'user_id' => User::factory()->create()->id,
        'eatery_id' => $eatery->id,
        'amount' => 25,
        'ref' => 'shared-order-reference',
        'status' => 'placed',
    ]);
    $secondItem = Cart::create([
        'user_id' => $firstItem->user_id,
        'eatery_id' => $eatery->id,
        'amount' => 50,
        'quantity' => 2,
        'ref' => 'shared-order-reference',
        'status' => 'placed',
    ]);

    $this->actingAs($admin)
        ->put(route('AdminHistory.update', $firstItem), ['status' => 'shipped'])
        ->assertRedirect();

    $this->assertDatabaseHas('carts', ['id' => $firstItem->id, 'status' => 'shipped']);
    $this->assertDatabaseHas('carts', ['id' => $secondItem->id, 'status' => 'shipped']);
});

test('an admin cannot set a status that is not allowed by the carts table', function () {
    $admin = User::factory()->create(['role' => 'admin']);
    $user = User::factory()->create();
    $eatery = Eatery::create([
        'name' => 'Test meal',
        'sku' => Str::uuid()->toString(),
        'price' => 25,
        'image' => 'test-meal.jpg',
        'description' => 'A test meal',
    ]);
    $cartItem = Cart::create([
        'user_id' => $user->id,
        'eatery_id' => $eatery->id,
        'amount' => 25,
        'ref' => 'single-order-reference',
        'status' => 'placed',
    ]);

    $this->actingAs($admin)
        ->put(route('AdminHistory.update', $cartItem), ['status' => 'processing'])
        ->assertSessionHasErrors('status');

    $this->assertDatabaseHas('carts', ['id' => $cartItem->id, 'status' => 'placed']);
});
