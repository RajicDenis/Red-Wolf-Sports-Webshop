<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
        	'name' => 'Nike Vapor',
        	'slug' => 'Nike-Vapor',
        	'description' => 'New series updated with energizing boost™ for a hybrid look that brings together the best of iconic stadium style and modern performance. A leather upper keeps them connected to their predecessor.',
            'short' => 'Firm Ground Football Boot',
        	'price' => 120,
        	'image' => '3.png',

        ]);

         Product::create([
        	'name' => 'Nike Nemesis',
        	'slug' => 'Nike-Nemesis',
        	'description' => 'New series updated with energizing boost™ for a hybrid look that brings together the best of iconic stadium style and modern performance. A leather upper keeps them connected to their predecessor.',
            'short' => 'Firm Ground Football Boot',
        	'price' => 120,
        	'image' => 'nemesis-tr2.png',

        ]);

         Product::create([
        	'name' => 'Adidas Nemesis 17+',
        	'slug' => 'Adidas-Nemesis-17+',
        	'description' => 'New series updated with energizing boost™ for a hybrid look that brings together the best of iconic stadium style and modern performance. A leather upper keeps them connected to their predecessor.',
            'short' => 'Firm Ground Football Boot',
        	'price' => 120,
        	'image' => 'nemesis-tr.png',

        ]);

         Product::create([
        	'name' => 'Adidas Copa Z',
        	'slug' => 'Adidas-Copa-Z',
        	'description' => 'New series updated with energizing boost™ for a hybrid look that brings together the best of iconic stadium style and modern performance. A leather upper keeps them connected to their predecessor.',
            'short' => 'Firm Ground Football Boot',
        	'price' => 120,
        	'image' => '1.png',

        ]);
    }
}
