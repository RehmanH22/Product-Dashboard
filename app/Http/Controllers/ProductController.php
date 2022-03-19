<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::paginate(10);

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store()
    {
        $validatedAttributes = request()->validate([
            'type' => 'required',
            'title' => 'required',
            'author' => 'required',
            'other' => 'required|numeric',
            'price' => 'required|numeric',
        ]);

        Product::create($validatedAttributes);

        return redirect('/products');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Product $product)
    {
        //dd($product);
        $validatedAttributes = request()->validate([
            'type' => 'required',
            'title' => 'required',
            'author' => 'required',
            'other' => 'required|numeric',
            'price' => 'required|numeric',
        ]);

        $product->update($validatedAttributes);

        return redirect('/products');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/products');
    }

    public function search(Request $request)
    {
        $search_text = $request->get('query');

        $products = Product::where('id', 'LIKE', '%' . $search_text . '%')
            ->orWhere('type', 'like', '%' . $search_text . '%')
            ->orWhere('title', 'like', '%' . $search_text . '%')
            ->orWhere('author', 'like', '%' . $search_text . '%')
            ->get();

        return view('products.search', compact('products'));
    }
}
