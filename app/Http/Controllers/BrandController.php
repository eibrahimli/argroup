<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index() {
        $brands = Brand::all();

        return view('brand.index',compact('brands'));
    }
    public function show(Brand $brand) {

        return view('brand.index',compact('brand'));
    }
}
