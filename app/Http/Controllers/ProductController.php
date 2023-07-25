<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Lot;
use App\Models\Category;
use App\Models\Provider;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::where('status',1)->paginate();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorys=Category::get();
        $providers=Provider::get();
        return view('product.create',compact('categorys','providers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // Crear un nuevo lote en la base de datos
        $lot = new Lot([
            'expiration_date' => $request->expiration_date,
            'lot_number' => $request->lot_number
        ]);        
        $lot->save();
        // Iterar sobre los datos del formulario
        foreach ($request->productos as $key => $value) {
            // Crear un registro en la tabla
            $product = new Product([
                'category_id' => $request->input('productos')[$key]['category_id'],
                'provider_id' => $request->provider_id,
                'lots_id' => $lot->id,
                'name' => $request->input('productos')[$key]['name'],
                'sku' => $request->input('productos')[$key]['sku'],
                'price' => $request->input('productos')[$key]['price']
            ]);            
            $product->save();

            


        }
         // Devolver una respuesta al usuario
         return redirect('product')->with('success', 'Los registros se han guardado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
