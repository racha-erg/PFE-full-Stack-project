<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(12);

        return view('products.index', ['products' => $products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());

        return redirect()->route('products.show', ['product' => $product->id]);
    }

    public function show(Product $product)
    {
        return view('products.show', ['product' => $product]);
    }

    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return redirect()->route('products.show', ['product' => $product->id]);
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }

    // public function showByCategory($category)
    // {
    //     $products = Product::where('category_id', $category)->paginate(16);
    //     $categoryName = $product->category->name;
    //     return view('products.categories', ['products' => $products,'categoryName' => $categoryName]);
    // }


public function showByCategory($category)
{
    $category = Category::findOrFail($category);

    $products = $category->products;

    return view('products.categories', ['products' => $products, 'category' => $category]);
}

}
