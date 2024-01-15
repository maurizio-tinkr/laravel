<?php

use Symfony\Component\HttpFoundation\Response;

it('can list products', function () {
    $this->getJson(
        '/api/products'
    )->assertStatus(
        status: Response::HTTP_OK
    );
});

it('can create a product', function () {
    $data = [
        'name' => 'Product 1',
        'price' => 100
    ];
    $response =  $this->postJson('/api/products', $data);
    $response->assertStatus(Response::HTTP_OK);

    $productData = $response->getData();
    expect($productData->name)->toBe('Product 1');
    expect($productData->price)->toBe(100);

});