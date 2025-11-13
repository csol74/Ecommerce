<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;


class BrandController extends Controller
{
    public function create(){
        return view('admin.brand.create');
    }

    public function store(Request $request){
        //dd($request->all());

        Brand::create([
            'name'=> $request->get('name')
        ]);
        return "Se guardo bien!!! XD";

    }

    public function table(){

        $brand = Brand::orderBy('id', 'desc')->paginate(10);

        return view('admin.brand.table',[
            'brand' => $brand
        ]);
    }

    public function destroy($id){
    $brand = \App\Models\Brand::findOrFail($id);
    $brand->delete();

    return redirect()->route('admin.brand.table')->with('success', 'Marca eliminada correctamente.');
    }
}
