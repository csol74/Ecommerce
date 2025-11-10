<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function create(){
        return view('admin.category.create');
    }

    public function store(Request $request){
        //dd($request->all());

        Category::create([
            'name'=> $request->get('name')
        ]);
        return "Se guardo bien!!! XD";

    }

    public function table(){

        $category = Category::orderBy('id', 'desc')->paginate(10);

        return view('admin.category.table',[
            'category' => $category
        ]);
    }

    public function destroy($id){
    $category = \App\Models\Category::findOrFail($id);
    $category->delete();

    return redirect()->route('admin.category.table')->with('success', 'Producto eliminado correctamente.');
    }
}
