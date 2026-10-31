<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {
        $data = $request-> validate([
            'name' => ['required', 'string', 'max:255'],
            'qty' => ['required', 'integer', 'min:0'],
            'price' => ['required', 'numeric', 'min:0'],
            'description' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
        ]);

        if($request->hasFile('image'))
        {
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        Product::create($data);

        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    public function edit(Product $product) {
        return view('products.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request) {
        $data = $request-> validate([
            'name' => ['required', 'string', 'max:255'],
            'qty' => ['required', 'integer', 'min:0'],
            'price' => ['required', 'numeric', 'min:0'],
            'description' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
        ]);

        $oldImage = $product->image;
        if($request->hasFile('image'))
        {
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        $product->update($data);

        if($request->hasFile('image') && $oldImage)
        {
            Storage::disk('public')->delete($oldImage);
        }

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    public function remove(Product $product) {
        $image = $product->image;

        $product->delete();
        if($image)
        {
            Storage::disk('public')->delete($image);
        }

        return redirect()->route('products.index')->with('success', 'Product removed successfully!');
    }

    public function show(Product $product)
    {
        return view('products.show', ['product' => $product]);
    }
}
