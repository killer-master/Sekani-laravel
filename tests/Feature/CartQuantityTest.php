<?php

use App\Models\Cart;
use App\Models\Eatery;
use App\Models\User;
use Illuminate\Support\Str;

function createCartQuantityItem(User $user, int $quantity = 1): Cart
{
    $eatery = Eatery::create([
        'name' => 'Test meal',
        'sku' => Str::uuid()->toString(),
        'price' => 25,
        'image' => 'test-meal.jpg',
        'description' => 'A test meal',
    ]);

    return Cart::create([
        'user_id' => $user->id,
        'eatery_id' => $eatery->id,
        'quantity' => $quantity,
        'amount' => 25 * $quantity,
        'status' => 'added',
    ]);
}

test('a user can increment a cart item quantity and update its total', function () {
    $user = User::factory()->create();
    $cartItem = createCartQuantityItem($user);

    $this->actingAs($user)
        ->patchJson(route('cart.quantity', $cartItem), ['action' => 'increment'])
        ->assertOk()
        ->assertJson([
            'quantity' => 2,
            'amount' => 50,
            'cart_total' => 50,
            'item_count' => 2,
        ]);

    $this->assertDatabaseHas('carts', [
        'id' => $cartItem->id,
        'quantity' => 2,
        'amount' => 50,
    ]);
});

test('decrementing a cart item never reduces its quantity below one', function () {
    $user = User::factory()->create();
    $cartItem = createCartQuantityItem($user);

    $this->actingAs($user)
        ->patchJson(route('cart.quantity', $cartItem), ['action' => 'decrement'])
        ->assertOk()
        ->assertJson([
            'quantity' => 1,
            'amount' => 25,
            'cart_total' => 25,
            'item_count' => 1,
        ]);

    $this->assertDatabaseHas('carts', [
        'id' => $cartItem->id,
        'quantity' => 1,
        'amount' => 25,
    ]);
});

test('a user cannot change another users cart item quantity', function () {
    $owner = User::factory()->create();
    $otherUser = User::factory()->create();
    $cartItem = createCartQuantityItem($owner);

    $this->actingAs($otherUser)
        ->patchJson(route('cart.quantity', $cartItem), ['action' => 'increment'])
        ->assertNotFound();

    $this->assertDatabaseHas('carts', [
        'id' => $cartItem->id,
        'quantity' => 1,
    ]);
});
