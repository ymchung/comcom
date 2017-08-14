<?php

namespace App;
use App\Category;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $guarded = [];


  public function priceText() {
      return '$' . $this->price;
  }

  public function category() {
    return $this->belongsTo(Category::class);
  }

  public function user() {
    return $this->belongsTo(Category::class);
  }
}
