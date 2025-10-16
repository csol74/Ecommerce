{{-- resources/views/productos/create.blade.php --}}
@extends('layouts.app')
@section('hide-navbar', true)
@section('hide-footer', true)
@section('css')
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
@endsection
@section('content')
    <div class="navigation">
        <a href="/products">← Volver al listado</a>
    </div>
    <div class="container">
        <h1>Crear Nuevo Producto</h1>

        <form action="/products" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">Nombre del Producto *</label>
                <input type="text" id="name" name="name" required placeholder="Ingrese el nombre del producto">
            </div>

            <div class="form-group">
                <label for="description">Descripción *</label>
                <textarea id="description" name="description" required placeholder="Describe las características del producto"></textarea>
            </div>

            <div class="form-group">
                <label for="price">Precio *</label>
                <input type="number" id="price" name="price" step="0.01" min="0" required placeholder="0.00">
            </div>

            <div class="form-group">
                <label for="image">Imagen del Producto</label>
                <input type="file" id="image" name="image" accept="image/*">
                <small style="color: #666;">Formatos aceptados: JPG, PNG, GIF</small>
            </div>

            <div class="form-group">
                <label for="brand">Marca *</label>
                <input type="text" id="brand" name="brand" required placeholder="Ingrese la marca del producto">
            </div>

            <div class="form-actions">
                <button type="submit" class="btn">Crear Producto</button>
                <a href="/products" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
@endsection

