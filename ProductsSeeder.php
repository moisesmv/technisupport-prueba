<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
        	'id'=>1,
        	'name'=>'GENERAL',
        	'stock'=>100
        ]);
        Product::create([
        	'id'=>2,
			'name'=>'VARIOS',
        	'stock'=>100
        ]);
        Product::create([
        	'id'=>3,
        	'name'=>'OTROS',
        	'stock'=>100
        ]);
   }
}
