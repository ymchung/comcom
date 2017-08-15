<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use App\Product;
use App\Category;
use App\Http\Requests\ProductCreateRequest;
use App\Http\Controllers\Auth;

use Illuminate\Http\Request;

class SitesController extends Controller
{
    public function products() {
      $products = Product::all();
      $categories = Category::all();
      return view('productslist', compact('products', 'categories'));
    }
}
