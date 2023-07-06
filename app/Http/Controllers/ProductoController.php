<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
{
    $productos = Producto::all();

    return view('productos.index', compact('productos'));
}

    public function eliminarProducto($id)
{
    $producto = Producto::find($id);

    if ($producto) {
        $producto->delete();
        return response()->json(['message' => 'Producto eliminado exitosamente']);
    }

    return response()->json(['message' => 'Producto no encontrado'], 404);
}
public function actualizarProducto(Request $request, $id)
{
    $productos = Producto::find($id);

    if ($producto) {
        $producto->nombre_producto = $request->input('nombre_producto');
        $producto->precio = $request->input('precio');
        $producto->cantidad = $request->input('cantidad');
        $producto->fecha_de_ingreso = $request->input('fecha_de_ingreso');
        $producto->estado = $request->input('estado');
        $producto->id_tiposProductos = $request->input('id_tiposProductos');
        $producto->save();

        return response()->json(['message' => 'Producto actualizado exitosamente']);
    }

    return response()->json(['message' => 'Producto no encontrado'], 404);
}
}
