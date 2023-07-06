@extends('layouts.app')

@section('content')
    <h1>Detalles del producto</h1>
    <p><strong>Nombre:</strong> {{ $producto->nombre_producto }}</p>
    <p><strong>Precio:</strong> {{ $producto->precio }}</p>
    <p><strong>Cantidad:</strong> {{ $producto->cantidad }}</p>
    <p><strong>Fecha de ingreso:</strong> {{ $producto->fecha_ingreso }}</p>
    <p><strong>Estado:</strong> {{ $producto->estado ? 'Activo' : 'Inactivo' }}</p>
    <p><strong>Tipo de producto:</strong> {{ $producto->tipoProducto->tipo }}</p>
    <a href="{{ route('productos.edit', $producto->id) }}">Editar</a>
    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
    <a href="{{ route('productos.index') }}">Volver</a>
@endsection