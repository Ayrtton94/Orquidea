<?php

namespace App\Http\Controllers;

use App\Models\Seller;

use App\Models\Departamento;
use App\Models\Provincia;
use App\Models\Distrito;

use Carbon\Carbon;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('seller.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departamentos = Departamento::get();
        return view('seller.create',compact('departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Seller $seller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $seller = Seller::findOrFail($id);
        $departamentos = Departamento::get();

        $departament = Departamento::findOrFail($seller->departamento_id);
        $provicia = Provincia::findOrFail($seller->provincia_id);
        $distrito = Distrito::findOrFail($seller->distrito_id);

        return view('seller.edit',compact('seller','departamentos','departament','provicia','distrito'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seller $id)
    {
        $datosseller = Seller::findOrFail($id);
		$datosseller->update(['status' => 0]);
        return redirect('seller')->with('info','El Vendedor se elimino con éxito');
    }
}
