<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
        return view('products.index');
    }


    function create()
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('products.create',[
            'brands' => $brands,
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'brand' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);


        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        }


        return redirect('/products')->with('success', 'Producto creado exitosamente!');
    }


    public function show($id, $category = null)
    {

        return view('products.show', compact('id'));
    }


    public function edit($id)
    {

        return view('products.edit', compact('id'));
    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'brand' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);


        return redirect('/products/' . $id)->with('success', 'Producto actualizado exitosamente!');
    }


    public function destroy($id)
    {

        return redirect('/products')->with('success', 'Producto eliminado exitosamente!');
    }
}
