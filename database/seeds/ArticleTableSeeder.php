<?php

use App\Article;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ArticleTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Article::create(array(
            'name' => 'Test Telefoon',
            'details' => 'bla bla bla',
            'price' => 15.20,
            'brand' => 'Samsung',
            'model' => 'Galaxy S3'
        ));

        Article::create(array(
            'name' => 'iPhone 6',
            'details' => 'bla bla bla',
            'price' => 500,
            'brand' => 'Apple',
            'model' => 'iPhone 6'
        ));
	}

}
