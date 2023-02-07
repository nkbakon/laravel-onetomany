<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $category = Category::findOrFail($request->category_id);
        $category->products()->create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'price' => $request->price,           
        ]);

        return redirect()->route('products.index')->with('status', 'Product added successfully.');
    }
}
