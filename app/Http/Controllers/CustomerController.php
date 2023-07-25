<?php

namespace App\Http\Controllers;

use App\Models\Customer;

use App\Models\Departamento;
use App\Models\Provincia;
use App\Models\Distrito;

use Carbon\Carbon;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::where('status',1)->paginate();
        return view('customer.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departamentos = Departamento::get();
        return view('customer.create',compact('departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'razon_social'=>'required|string|max:100',
            'ruc'=>'required|integer|min:10',
            'rubro'=>'required|string|max:100',
            'pagina_web'=>'required|string|max:100',
            'direccion'=>'required|string|max:100',
            'departamento_id'=>'required|string|max:100',
            'provincia_id'=>'required|string|max:100',
            'distrito_id'=>'required|string|max:100',
            'nombres'=>'required|string|max:100',
            'apellidos'=>'required|string|max:100',
            'tipo_doc'=>'required|string|max:100',
            'number_doc'=>'required|integer|min:10',
            'telefono'=>'required|integer|min:9',
            'correo'=>'required|email',             
        ]);

        Customer::create($request->all()+[
            'date'=>Carbon::now('America/lima'),
        ]);
        
        return redirect('customer')->with('info','El Cliente se creó con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        $departamentos = Departamento::get();

        $departament = Departamento::findOrFail($customer->departamento_id);
        $provicia = Provincia::findOrFail($customer->provincia_id);
        $distrito = Distrito::findOrFail($customer->distrito_id);
        return view('customer.edit', compact('customer','departamentos','departament','provicia','distrito'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'razon_social'=>'required|string|max:100',
            'ruc'=>'required|integer|min:10',
            'rubro'=>'required|string|max:100',
            'pagina_web'=>'required|string|max:100',
            'direccion'=>'required|string|max:100',
            'departamento_id'=>'required|string|max:100',
            'provincia_id'=>'required|string|max:100',
            'distrito_id'=>'required|string|max:100',
            'nombres'=>'required|string|max:100',
            'apellidos'=>'required|string|max:100',
            'tipo_doc'=>'required|string|max:100',
            'number_doc'=>'required|integer|min:10',
            'telefono'=>'required|integer|min:9',
            'correo'=>'required|email',             
        ]);
        $datoscustomer = request()->except(['_token','_method']);
        Customer::where('id','=',$id)->update($datoscustomer);
        return redirect('customer')->with('info','El Cliente se edito con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $datoscustomer = Customer::findOrFail($id);
		$datoscustomer->update(['status' => 0]);
        return redirect('customer')->with('info','El Cliente se elimino con éxito');
    }
}
