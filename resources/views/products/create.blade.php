@extends('admin.layouts.app')
@section('content')
    <h1 class="mb-4">Crear Nuevo Producto</h1>

    <div class="card">
        <div class="cardbody">
        <form action="/products" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Nombre del Producto -->
        <div class="input-group input-group-outline mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <!-- Descripción del Producto -->
        <div class="input-group input-group-outline mb-3 ">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>

        <!-- Precio del Producto -->
        <div class="input-group input-group-outline mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" step="0.01" min="0">
        </div>

        <!-- Categoría del Producto -->
        <div class="input-group input-group-outline mb-3">
            <select class="form-control" id="category">
                <option value="" selected disabled>--Category--</option>
                 @foreach ($categories as $item)
                    <option value="{{ $item->id }}">{{ $item->name}}</option>
                 @endforeach
            </select>
        </div>

        <!-- Categoría del Producto -->
        <div class="input-group input-group-outline mb-3">
            <select class="form-control" id="brand">
                <option value="" selected disabled>--Brand--</option>
                 @foreach ($categories as $item)
                    <option value="{{ $item->id }}">{{ $item->name}}</option>
                 @endforeach
            </select>
        </div>
        <!-- Botones -->
        <div class="form-actions mt-4">
            <button type="submit" class="btn btn-primary">Crear Producto</button>

        </div>
    </form>
        </div>
    </div>
@endsection
