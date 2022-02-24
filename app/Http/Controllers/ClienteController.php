<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public $clientes;
    
    public function index(){
        $this->clientes = Cliente::all();
        return $this->clientes;
   }
}

