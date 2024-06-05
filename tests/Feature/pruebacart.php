<?php
/*
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class pruebacart extends TestCase
{
    
     * A basic feature test example.
     
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    
}*/

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_it_stores_products_in_cart()
    {
        // Simulamos la creación de un producto para agregar al carrito
        $product = [
            'name' => 'Producto de prueba',
            'price' => 10.99,
            'quantity' => 2,
        ];

        // Enviamos una solicitud POST para agregar el producto al carrito
        $response = $this->post('/cart', $product);

        // Verificamos que la respuesta sea una redirección al carrito
        $response->assertRedirect('/cart');

        // Verificamos que los datos del producto se hayan almacenado en la base de datos
        $this->assertDatabaseHas('carts', [
            'name' => $product['name'],
            'price' => $product['price'],
            'quantity' => $product['quantity'],
        ]);
    }
}