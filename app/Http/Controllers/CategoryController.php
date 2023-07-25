<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Category::where('status',1)->paginate();
        return view('category.index',compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' =>'required|string',
            'date' =>'required|date',
            'description' =>'required|string',            
        ]);
       Category::create([
            'name'=>$validatedData['name'],
            'date'=>$validatedData['date'],
            'description'=>$validatedData['description'],
        ]);
        return redirect('category')->with('success','La Categoria se creó con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datosCategoria = request()->except(['_token','_method']);
        Category::where('id','=',$id)->update($datosCategoria);
        return redirect('category')->with('info','La Categoria se edito con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cate = Category::findOrFail($id);
		$cate->update(['status' => 0]);
        return redirect('category')->with('info','La Categoria se elimino con éxito');
    }
}
