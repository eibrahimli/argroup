<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request) {

        $query = Product::query();
        $categories = Category::all();
        $brands = Brand::all();

        $brand = $request->input('brand',false);
        $category = $request->input('category', false);

        if($brand):
            $brand = Brand::find($brand);
            $query->where('brand_id', $brand->id);
        endif;

        if($category):
            $category = Category::find($category);
            $query->where('category_id', $category->id);
        endif;

        $products = $query->get();

        return view('product.main',compact('products', 'categories','brand','category','brands'));
    }
    public function show(Product $product) {
        $query = Product::query();

        if($product->category):
            $query->where('category_id',$product->category->id);
        endif;

        $related_products = $query->get();

        return view('product.show',compact('product','related_products'));
    }
}
