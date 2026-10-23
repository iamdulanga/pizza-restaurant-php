<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_the_home_page_returns_successful_response(): void
    {
        Product::create([
            'name' => 'Test Pizza',
            'category' => 'Pizza',
            'description' => 'Test pizza description',
            'image' => 'pizza-1.jpg',
            'price' => 12.99,
        ]);

        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('Test Pizza');
    }

    public function test_menu_page_lists_products(): void
    {
        Product::create([
            'name' => 'Pepperoni Supreme',
            'category' => 'Pizza',
            'description' => 'Cheesy and spicy',
            'image' => 'pizza-2.jpg',
            'price' => 14.50,
        ]);

        $response = $this->get('/menu');
        $response->assertStatus(200);
        $response->assertSee('Pepperoni Supreme');
    }

    public function test_can_add_item_to_cart_and_view_it(): void
    {
        $product = Product::create([
            'name' => 'Italian Classic',
            'category' => 'Pizza',
            'description' => 'Traditional pizza',
            'image' => 'pizza-1.jpg',
            'price' => 12.00,
        ]);

        $postResponse = $this->post('/cart/add', [
            'product_id' => $product->id,
            'quantity' => 2,
        ]);

        $postResponse->assertRedirect('/cart');

        $cartResponse = $this->get('/cart');
        $cartResponse->assertStatus(200);
        $cartResponse->assertSee('Italian Classic');
        $cartResponse->assertSee('$24.00');
    }

    public function test_about_page_renders(): void
    {
        $response = $this->get('/about');
        $response->assertStatus(200);
        $response->assertSee('About Us');
    }

    public function test_services_page_renders(): void
    {
        $response = $this->get('/services');
        $response->assertStatus(200);
        $response->assertSee('Our Services');
    }

    public function test_contact_page_renders(): void
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);
        $response->assertSee('Contact Information');
    }

    public function test_blog_page_renders(): void
    {
        $response = $this->get('/blog');
        $response->assertStatus(200);
        $response->assertSee('Read Our Blog');
    }
}
