<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Product;
use App\Category;
use App\Http\Requests\ProductCreateRequest;
use App\Http\Controllers\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::with('category')->paginate(10);
      return view('admin.products.products',compact('products'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories = Category::all();
      return view('admin.products.productscreate', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $file = $request->file('image');
      $ext = $file->extension();
      $name = uniqid();
      $path = $file->storeAs('products'.$request->id, $name.'.'.$ext);

      $upload = [
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'category_id' => $request->input('category_id'),
        'originalprice' => $request->input('originalprice'),
        'comcomprice' => $request->input('comcomprice'),
        'minimumreservation' => $request->input('minimumreservation'),
        'duration' => $request->input('duration'),
        'image' => $path
      ];
      \Auth::user()->products()->create($upload);
      return redirect('admin/products');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // $product = Product::findOrFail($id);
      // return view('productshow', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $product = Product::findOrFail($id);
      $categories = Category::all();
      return view('admin.products.productsedit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductCreateRequest $request, $id)
    {
      $product = Product::findOrFail($id);

      $file = $request->file('image');
      $ext = $file->extension();
      $name = uniqid();
      $path = $file->storeAs('products'.$request->id, $name.'.'.$ext);

      $upload = [
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'category_id' => $request->input('category_id'),
        'originalprice' => $request->input('originalprice'),
        'comcomprice' => $request->input('comcomprice'),
        'minimumreservation' => $request->input('minimumreservation'),
        'duration' => $request->input('duration'),
        'image' => $path
      ];

      $product->update($upload);
      return redirect('admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // $product = Product::findOrFail($id);
      // $product->destroy();
      // // Product::destroy($id);
      // return view('productslist');

      $product = Product::find($id);
      $product->delete();
      return redirect('/admin/products');
    }

}
