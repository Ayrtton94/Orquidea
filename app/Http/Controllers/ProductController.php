<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Lot;
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
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' =>'required|string',
            'sku' =>'required|string|unique:products,sku',
            'quantity' =>'required|integer',
            'price' =>'required|string',
            'lot_number' =>'required|string',
            'expiration_date' =>'required|date',
        ]);
        $product = Product::create([
            'name'=>$validatedData['name'],
            'sku'=>$validatedData['sku'],
            'quantity'=>$validatedData['quantity'],
            'price'=>$validatedData['price'],
        ]);

        $lot = new Lot();
        $lot->product_id = $product->id;
        $lot->lot_number=$validatedData['lot_number'];
        $lot->expiration_date=$validatedData['expiration_date'];
        $lot->quantity=$validatedData['quantity'];
        $lot->save();

        return redirect()->route('producto.index')->with('success', 'Producto y lote creados exitosamente');

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
        //
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
