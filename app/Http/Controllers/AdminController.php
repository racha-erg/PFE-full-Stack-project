<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function dashboard()
    {
        $products = DB::table('products')->paginate(20);
        //$products_category_id = DB::table('products')->category_id;
        //$category = Category::find(products_category_id);
       return view('admin.dashboard')->with(['products' => $products]);
    }

    
    public function create()
    {
        $categories = Category::all();
        return view('admin.create', ['categories' => $categories]);
    }

    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'image1' => 'required|image',
            'image2' => 'required|image',
            'image3' => 'required|image',
            'image4' => 'required|image',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->quantity = $request->input('quantity');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category_id');

        $product->image1 = $request->file('image1')->store('products', 'public');
        $product->image2 = $request->file('image2')->store('products', 'public');
        $product->image3 = $request->file('image3')->store('products', 'public');
        $product->image4 = $request->file('image4')->store('products', 'public');

        $product->save();

        return redirect()->route('admin.dashboard')->with('success', 'Produit ajouté avec succès');
 
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();

        return view('admin.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {  
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image1' => 'required|image',
            'image2' => 'required|image',
            'image3' => 'required|image',
            'image4' => 'required|image',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
        ]);
        
        
        $product = Product::findOrFail($id);

        $product->name = $request->name;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;

        if ($request->hasFile('image1')) {

            Storage::delete($product->image1);
            $product->image1 = $request->file('image1')->store('products', 'public');
        }
        if ($request->hasFile('image2')) {

            Storage::delete($product->image2);
            $product->image2 = $request->file('image2')->store('products', 'public');
        }
        if ($request->hasFile('image3')) {

            Storage::delete($product->image3);
            $product->image3 = $request->file('image3')->store('products', 'public');
        }
        if ($request->hasFile('image4')) {

            Storage::delete($product->image4);
            $product->image4 = $request->file('image4')->store('products', 'public');
        }

        $product->category_id = $request->category_id;

        $product->save();

        return redirect()->route('admin.dashboard')->with('success', 'Produit mis à jour avec succès');
    

}


    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $product = product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Produit supprimé avec succès.');
    }

        public function dashSearch(Request $request)
    {
        $query = $request->input('querydash');

        $results = DB::table('products')
                    ->where('name', 'LIKE', '%' . $query . '%')
                    ->get();

        return view('admin.productSearched', ['results' => $results]);
    }

}
