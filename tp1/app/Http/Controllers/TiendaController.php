<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class TiendaController extends Controller
{
    public function ver()
    {
        $productos = Producto::all();
        return view('tienda.ver',[
            'productos' => $productos
        ]);
    }
}
