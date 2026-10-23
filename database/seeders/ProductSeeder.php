<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            // Pizzas
            [
                'name' => 'Italian Pizza',
                'category' => 'Pizza',
                'description' => 'Classic mozzarella, crushed San Marzano tomato sauce, fresh basil, and extra virgin olive oil.',
                'image' => 'pizza-1.jpg',
                'price' => 12.99,
                'special_offer' => true,
                'color' => 'Red',
            ],
            [
                'name' => 'Greek Pizza',
                'category' => 'Pizza',
                'description' => 'Creamy feta cheese, kalamata olives, sun-ripened tomatoes, sweet red onions, and oregano.',
                'image' => 'pizza-2.jpg',
                'price' => 14.50,
                'special_offer' => false,
                'color' => 'Green',
            ],
            [
                'name' => 'Caucasian Pizza',
                'category' => 'Pizza',
                'description' => 'Tender grilled chicken breast, fresh bell peppers, caramelized onions, and melted mozzarella.',
                'image' => 'pizza-3.jpg',
                'price' => 15.00,
                'special_offer' => true,
                'color' => 'Yellow',
            ],
            [
                'name' => 'American Pepperoni Pizza',
                'category' => 'Pizza',
                'description' => 'Crispy artisan pepperoni, smoked ham, bacon bits, and premium aged cheddar cheese blend.',
                'image' => 'pizza-4.jpg',
                'price' => 16.20,
                'special_offer' => false,
                'color' => 'Red',
            ],
            [
                'name' => 'Tomato & Basil Pizza',
                'category' => 'Pizza',
                'description' => 'Vine-ripened cherry tomatoes, aromatic garlic confit, roasted herbs, and buffalo mozzarella.',
                'image' => 'pizza-5.jpg',
                'price' => 13.50,
                'special_offer' => false,
                'color' => 'Red',
            ],
            [
                'name' => 'Margherita Supreme',
                'category' => 'Pizza',
                'description' => 'Traditional Neapolitan crust with rich tomato puree, shredded parmesan, and fresh oregano leaves.',
                'image' => 'pizza-6.jpg',
                'price' => 11.99,
                'special_offer' => false,
                'color' => 'Green',
            ],
            [
                'name' => 'Rustic Quattro Formaggi',
                'category' => 'Pizza',
                'description' => 'Blend of four artisanal cheeses: Gorgonzola, Fontina, Parmigiano-Reggiano, and Mozzarella.',
                'image' => 'pizza-7.jpg',
                'price' => 17.50,
                'special_offer' => true,
                'color' => 'Yellow',
            ],
            [
                'name' => 'Spicy Diablo Pizza',
                'category' => 'Pizza',
                'description' => 'Spicy Calabrian salami, jalapenos, chili flakes, red onions, and hot honey drizzle.',
                'image' => 'pizza-8.jpg',
                'price' => 16.80,
                'special_offer' => false,
                'color' => 'Red',
            ],

            // Burgers
            [
                'name' => 'Signature Beef Burger',
                'category' => 'Burgers',
                'description' => 'Angus beef patty with melted cheddar, lettuce, heirloom tomato, and house burger sauce.',
                'image' => 'burger-1.jpg',
                'price' => 10.99,
                'special_offer' => false,
                'color' => 'Brown',
            ],
            [
                'name' => 'Double Bacon Cheeseburger',
                'category' => 'Burgers',
                'description' => 'Double beef patty, crispy bacon strips, smoked gouda cheese, and sweet pickle relish.',
                'image' => 'burger-2.jpg',
                'price' => 13.99,
                'special_offer' => true,
                'color' => 'Brown',
            ],
            [
                'name' => 'Crispy Chicken Burger',
                'category' => 'Burgers',
                'description' => 'Golden fried chicken breast, creamy coleslaw, spicy mayo, on a toasted brioche bun.',
                'image' => 'burger-3.jpg',
                'price' => 11.50,
                'special_offer' => false,
                'color' => 'Yellow',
            ],

            // Pasta
            [
                'name' => 'Creamy Fettuccine Alfredo',
                'category' => 'Pasta',
                'description' => 'Ribbon fettuccine tossed in a rich garlic butter cream sauce with cracked black pepper.',
                'image' => 'pasta-1.jpg',
                'price' => 13.20,
                'special_offer' => false,
                'color' => 'White',
            ],
            [
                'name' => 'Spaghetti Bolognese',
                'category' => 'Pasta',
                'description' => 'Slow-simmered beef ragù, herbs, San Marzano tomatoes, topped with aged parmesan cheese.',
                'image' => 'pasta-2.jpg',
                'price' => 14.00,
                'special_offer' => false,
                'color' => 'Red',
            ],
            [
                'name' => 'Penne all’Arrabbiata',
                'category' => 'Pasta',
                'description' => 'Penne pasta in a fiery tomato and garlic chili sauce with fresh Italian parsley.',
                'image' => 'pasta-3.jpg',
                'price' => 12.50,
                'special_offer' => false,
                'color' => 'Red',
            ],

            // Drinks
            [
                'name' => 'Lemon Mint Iced Tea',
                'category' => 'Drinks',
                'description' => 'Freshly brewed black tea infused with Sicilian lemon and crisp garden mint leaves.',
                'image' => 'drink-1.jpg',
                'price' => 4.50,
                'special_offer' => false,
                'color' => 'Yellow',
            ],
            [
                'name' => 'Berry Sparkler',
                'category' => 'Drinks',
                'description' => 'Wild strawberries, raspberries, sparkling soda water, and a twist of lime.',
                'image' => 'drink-2.jpg',
                'price' => 5.20,
                'special_offer' => false,
                'color' => 'Red',
            ],
            [
                'name' => 'Classic Italian Soda',
                'category' => 'Drinks',
                'description' => 'Craft carbonated beverage with natural orange blossom notes and crushed ice.',
                'image' => 'drink-3.jpg',
                'price' => 3.99,
                'special_offer' => false,
                'color' => 'Orange',
            ],
        ];

        foreach ($products as $product) {
            Product::updateOrCreate(['name' => $product['name']], $product);
        }
    }
}
