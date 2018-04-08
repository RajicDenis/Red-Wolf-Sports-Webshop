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
        	'price' => 125,
        	'image' => '3.png',
            'type' => 'shoe',

        ]);

        Product::create([
        	'name' => 'Nike Nemesis',
        	'slug' => 'Nike-Nemesis',
        	'description' => 'New series updated with energizing boost™ for a hybrid look that brings together the best of iconic stadium style and modern performance. A leather upper keeps them connected to their predecessor.',
            'short' => 'Firm Ground Football Boot',
        	'price' => 130,
        	'image' => 'nemesis-tr2.png',
            'type' => 'shoe',

        ]);

        Product::create([
        	'name' => 'Adidas Nemesis 17+',
        	'slug' => 'Adidas-Nemesis-17+',
        	'description' => 'New series updated with energizing boost™ for a hybrid look that brings together the best of iconic stadium style and modern performance. A leather upper keeps them connected to their predecessor.',
            'short' => 'Firm Ground Football Boot',
        	'price' => 135,
        	'image' => 'nemesis-tr.png',
            'type' => 'shoe',

        ]);

        Product::create([
        	'name' => 'Adidas Copa Z',
        	'slug' => 'Adidas-Copa-Z',
        	'description' => 'New series updated with energizing boost™ for a hybrid look that brings together the best of iconic stadium style and modern performance. A leather upper keeps them connected to their predecessor.',
            'short' => 'Firm Ground Football Boot',
        	'price' => 140,
        	'image' => '1.png',
            'type' => 'shoe',

        ]);

        Product::create([
            'name' => 'Manchester United 2017/18-Kit',
            'slug' => 'Manchester-United-2017/18',
            'description' => 'Show your pride in the most successful team in England. Adidas presents a classy home jersey in the traditional red and white. Third color black stands out on the cuffs. Two button Henley collar. Three stripes are on the shoulders. Embroidered team and adidas logos. A panel with laser cut holes is each side for added ventilation. ClimaCool technology pulls moisture from the skin. 100% polyester.',
            'short' => 'Football Jersey',
            'price' => 200,
            'image' => 'mutd18.png',
            'type' => 'jersey',

        ]);

        Product::create([
            'name' => 'Borussia Dortmund 2017/18 Kit',
            'slug' => 'Borussia-Dortmund-2017/18-Kit',
            'description' => 'Since their surprise back-to-back Bundesliga titles in 2011 and 2012, Dortmund has cemented a position in the elite of German soccer. In 2016/17, BVB had another stellar season, finishing in third place in the league, and reaching the quarterfinals of the Champions League.',
            'short' => 'Football Jersey',
            'price' => 190,
            'image' => 'bd18.png',
            'type' => 'jersey',

        ]);

        Product::create([
            'name' => 'Real Madrid 2017/18 Kit',
            'slug' => 'Real-Madrid-2017/18-Kit',
            'description' => 'Thin silver lines run diagonally across the front panel and sleeves. Three stripes are on the shoulders. Embroidered team and adidas logos. A memorial badge at the hem reads 1902-2017, in honor of the clubs 115th anniversary.',
            'short' => 'Football Jersey',
            'price' => 190,
            'image' => 'rm18.png',
            'type' => 'jersey',

        ]);

    }
}
