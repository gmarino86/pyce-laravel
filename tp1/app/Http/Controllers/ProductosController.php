<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\ProductoTipo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Trae todos los productos
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        //$productos = Producto::all();
        $productos = Producto::with(['tipoProducto'])->get();

        return view('productos/index', [
            'productos' => $productos
        ]);
    }

    /**
     * Muestra por pantalla el producto seleccionado.
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function ver($id)
    {
        $producto = Producto::findOrFail($id);

        return view('productos/ver', [
            'producto' => $producto
        ]);
    }


    /**
     * Muestra por pantalla un formulario para crear un producto nuevo.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function formCrear()
    {
        $tipoProductos = ProductoTipo::all();
        return view('productos/form_nuevo', [
            'tipoProductos' => $tipoProductos
        ]);
    }

    /**
     * Funcion para dar de alta un producto
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function grabarProducto(Request $request)
    {
        $request->validate(Producto::$rules,Producto::$rulesMessages);

        $data = $request->all();
        Producto::create($data);

        return $this->toRoute('productos.index', [
            'success' => 'El producto de agregó con éxito'
        ]);
    }

    /**
     * Funcion para eliminar un producto
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function eliminar(int $id)
    {
        // TODO: Agregar confirmación.

        $producto = Producto::findOrFail($id);

        $producto->delete();

        return $this->toRoute('productos.index', [
            'success' => 'El producto se eliminó con éxito'
        ]);
    }

    /**
     * Funcion que carga la vista del formulario para la edicion de un producto.
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function editarForm(int $id)
    {
        $producto = Producto::findOrFail($id);

        return view('productos/form_editar',[
            'producto' => $producto
        ]);
    }

    /**
     * Funcion para realizar el update del producto en la DB
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function editarGrabar(Request $request, int $id)
    {
        $producto = Producto::findOrFail($id);

        $request->validate(Producto::$rules,Producto::$rulesMessages);
        $data = $request->all();

        $producto->update($data);

        return $this->toRoute('productos.index', [
            'success' => 'El producto se editó con éxito'
        ]);
    }

    /**
     * Funcion para el redireccionamiento
     * Ej: $this->toRoute('productos.index', ['message.success', 'El producto se editó con éxito']);
     *
     * @param string $route
     * @param array $messages
     * @return RedirectResponse
     */
    protected function toRoute(string $route, array $messages = []) :RedirectResponse
    {
        $redirect = redirect()->route($route);

        foreach ($messages as $type=> $message){
            $redirect->with('message.' . $type, $message);
        }
        return $redirect;
    }
}
