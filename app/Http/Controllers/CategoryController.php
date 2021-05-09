<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CategoryController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         $categories = Category::all();
        $products = Product::with(['galleries'])->paginate(8);
        return view('pages.category',[
            'categories' => $categories,
            'products' => $products 
            ]);
    }
/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
      public function detail(Request $request, $slug)
    {
        // var_dump($slug);
        $categories = Category::all();
        $category = Category::where('slug',$slug)->firstOrFail();
        $products = Product::with(['galleries'])->where('categories_id',$category->id)->paginate(8);
        return view('pages.category',[
            'categories' => $categories,
            'products' => $products 
             ]);
    }
}