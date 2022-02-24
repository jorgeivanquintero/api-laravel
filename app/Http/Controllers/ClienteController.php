<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    //public $clientes;
    
    public function index(){
             
        $clientes = Cliente::all();
        return \response($clientes);
   }
   
   public function store(Request $request){
       
       $request->validate([
           'documento' => 'required',
           'nombre' => 'required',
           'telefono' => 'required',
           'correo' => 'required',
        ]);

        $cliente = Cliente::create($request->all());
        return \response($cliente);
    }

    public function show($id){
               
        $cliente = Cliente::findOrFail($id);
        return \response($cliente);
    }
    
    public function update(Request $request,$id){

        $cliente = Cliente::findOrFail($id)
            ->update($request->all());
        
        return \response("Cliente actualizado");
    }
    
    public function destroy($id){

        Cliente::destroy($id);
        
        return \response("Cliente eliminado");
    }
    
}


