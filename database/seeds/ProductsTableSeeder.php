<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Category;
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
      $users = User::all();
      $categories = Category::all();
      $users->each(function ($user) use ($categories) {
          $categories->each(function ($category) use ($user) {
              factory(Product::class)->create([
                  'user_id' => $user->id,
                  'category_id' => $category->id
              ]);
          });
      });
    }
}
