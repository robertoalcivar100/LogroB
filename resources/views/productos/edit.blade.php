@extends('layouts.app')

@section('content')
    <h1>Editar producto</h1>
    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre_producto">Nombre:</label>
        <input type="text" name="nombre_producto" id="nombre_producto" value="{{ $producto->nombre_producto }}">
        <label for="precio">Precio:</label>
        <input type="number" name="precio" id="precio" value="{{ $producto->precio }}">
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" id="cantidad" value="{{ $producto->cantidad }}">
        <label for="fecha_ingreso">Fecha de ingreso:</label>
        <input type="date" name="fecha_ingreso" id="fecha_ingreso" value="{{ $producto->fecha_ingreso }}">
        <label for="estado">Estado:</label>
        <input type="checkbox" name="estado" id="estado" {{ $producto->estado ? 'checked' : '' }}>
        <label for="id_tipos_productos">Tipo de producto:</label>
        <select name="id_tipos_productos" id="id_tipos_productos">
            @foreach($tiposProductos as $tipoProducto)
                <option value="{{ $tipoProducto->id }}" {{ $producto->id_tipos_productos == $tipoProducto->id ? 'selected' : '' }}>
                    {{ $tipoProducto->tipo }}
                </option>
            @endforeach
        </select>
        <button type="submit">Guardar</button>
    </form>
@endsection
