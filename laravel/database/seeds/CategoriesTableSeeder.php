<?php

use App\Category;
use Illuminate\Database\Seeder;
//use Faker\Generator as Faker;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(array(
        	'name' => 'Nintendo Switch',
        	'description' => 'lorem ipsum'
        ));

        Category::create(array(
        	'name'   => 'PSP 4',
        	'description' => 'lorem ipsum'
        ));

        Category::create(array(
        	'name'   => 'Xbox One',
        	'description' => 'lorem ipsum'
        ));
    }
}
