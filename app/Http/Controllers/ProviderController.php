<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;

use App\Models\Departamento;
use App\Models\Provincia;
use App\Models\Distrito;

use Carbon\Carbon;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proveedores = Provider::where('status',1)->paginate();
        return view('provider.index',compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departamentos = Departamento::get();
        return view('provider.create',compact('departamentos'));
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
            'genero'=>'required|string|max:100',
            'telefono'=>'required|integer|min:9',
            'correo'=>'required|email',             
        ]);

        Provider::create($request->all()+[
            'fecha_creacion'=>Carbon::now('America/lima'),
        ]);

        return redirect('provider')->with('info','El Proveedor se creó con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Provider $provider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $provide = Provider::findOrFail($id);
        $departamentos = Departamento::get();

        $departament = Departamento::findOrFail($provide->departamento_id);
        $provicia = Provincia::findOrFail($provide->provincia_id);
        $distrito = Distrito::findOrFail($provide->distrito_id);

        return view('provider.edit', compact('provide','departamentos','departament','provicia','distrito'));
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
            'nombres'=>'required|string|max:100',
            'apellidos'=>'required|string|max:100',
            'telefono'=>'required|integer|min:9',
            'correo'=>'required|email',             
        ]);

        $datosprovide = request()->except(['_token','_method']);
        Provider::where('id','=',$id)->update($datosprovide);
        return redirect('provider')->with('info','El proveedor se edito con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $datosprovide = Provider::findOrFail($id);
		$datosprovide->update(['status' => 0]);
        return redirect('provider')->with('info','El proveedor se elimino con éxito');
    }
}
