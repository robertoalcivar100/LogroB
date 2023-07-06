@extends('layouts.app')

@section('content')
    <h1>Productos</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Fecha de ingreso</th>
                <th>Estado</th>
                <th>Tipo de producto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
                <tr>
                    <td>{{ $producto->nombre_producto }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>{{ $producto->cantidad }}</td>
                    <td>{{ $producto->fecha_ingreso }}</td>
                    <td>{{ $producto->estado ? 'Activo' : 'Inactivo' }}</td>
                    <td>{{ $producto->tipoProducto->tipo }}</td>
                    <td>
                        <a href="{{ route('productos.show', $producto->id) }}">Ver</a>
                        <a href="{{ route('productos.edit', $producto->id) }}">Editar</a>
                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('productos.create') }}">Crear producto</a>
@endsection