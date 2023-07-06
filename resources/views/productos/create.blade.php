@extends('layouts.app')

@section('content')
    <h1>Crear producto</h1>
    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <label for="nombre_producto">Nombre:</label>
        <input type="text" name="nombre_producto" id="nombre_producto">
        <label for="precio">Precio:</label>
        <input type="number" name="precio" id="precio">
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" id="cantidad">
        <label for="fecha_ingreso">Fecha de ingreso:</label>
        <input type="date" name="fecha_ingreso" id="fecha_ingreso">
        <label for="estado">Estado:</label>
        <input type="checkbox" name="estado" id="estado">
        <label for="id_tipos_productos">Tipo de producto:</label>
        <select name="id_tipos_productos" id="id_tipos_productos">
            @foreach($tiposProductos as $tipoProducto)
                <option value="{{ $tipoProducto->id }}">{{ $tipoProducto->tipo }}</option>
            @endforeach
        </select>
        <button type="submit">Guardar</button>
    </form>
@endsection
