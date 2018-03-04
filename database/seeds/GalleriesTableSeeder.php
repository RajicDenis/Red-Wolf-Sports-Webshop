<?php

use Illuminate\Database\Seeder;
use App\Gallery;

class GalleriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gallery::create([
        	'product_id' => 1,
        	'image' => '3.png',
        ]);

        Gallery::create([
        	'product_id' => 1,
        	'image' => '4.png',
        ]);

        Gallery::create([
        	'product_id' => 2,
        	'image' => '5.png',
        ]);

        Gallery::create([
        	'product_id' => 2,
        	'image' => '6.png',
        ]);

        Gallery::create([
        	'product_id' => 3,
        	'image' => '7.png',
        ]);
    }
}
