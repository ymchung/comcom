<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $categories = collect(['moda', 'tecnología', 'turismo']);
      $categories->each(function($value){
        factory(Category::class)->create([
          'name'=>ucfirst($value),
          'slug'=>str_slug($value)
        ]);
      });
    }
}
