<?php

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	'name' => 'Cotton shirt',
        	'price' => '130', 
            'slug' => '11',         
        ]);

        DB::table('products')->insert([
        	'name' => 'Jeans shirt',
        	'price' => '140',
            'slug' => '12',          
        ]);


        DB::table('products')->insert([
        	'name' => 'Outdated shirt',
        	'price' => '150',
            'slug' => '13',            
        ]);

        DB::table('products')->insert([
        	'name' => 'Sneakers',
        	'price' => '30',
            'slug' => '14', 
           
        ]);

        DB::table('products')->insert([
        	'name' => 'A|X',
        	'price' => '130',
            'slug' => '15', 
         
        ]);

    }
}
