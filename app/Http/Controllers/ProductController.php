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

        

        $product = new Product();
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->category_id = $request->get('category');
        $product->brand_id = $request->get('brand');

        $product->save();
        return "Save Product";

    }


    public function destroy($id)
    {

        return redirect('/products')->with('success', 'Producto eliminado exitosamente!');
    }
}
