<?php

namespace App\Http\Controllers;

use App\Models\Provincia;
use App\Models\Distrito;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function byprovincia($id){
        $data = Provincia::where('departamento_id','=',$id)->get();
        return response()->json($data, 200);        
    }
    public function bydistrito($id){
        $data = Distrito::where('provincia_id','=',$id)->get();
        return response()->json($data, 200);        
    }
}
