@extends('layouts.app')

{{-- Estilos específicos de esta vista --}}
@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<main class="products-section py-5">
    <div class="container">
        <h1 class="text-center mb-4">Gestión de Productos</h1>

        <!-- Barra de búsqueda y botón -->
        <div class="header-actions d-flex justify-content-between align-items-center mb-4">
            <input type="text" class="search-box form-control w-50" placeholder="Buscar productos..." id="searchInput">
            <a href="{{ url('/products/create') }}" class="btn btn-primary">+ Nuevo Producto</a>
        </div>

        <!-- Estadísticas -->
        <div class="stats bg-light p-3 rounded mb-4 shadow-sm">
            <div class="stats-content d-flex justify-content-between">
                <span><strong id="productCount">8</strong> productos registrados</span>
                <span>Total valor inventario: <strong>$12,450.00</strong></span>
            </div>
        </div>

        <!-- Grid de productos -->
        <div class="products-grid row g-4" id="productsContainer">
            <!-- Producto ejemplo -->
            @foreach ([
                [
                    'brand' => 'Samsung',
                    'name' => 'Galaxy S24 Ultra',
                    'price' => '$1,299.99',
                    'img' => 'https://images.unsplash.com/photo-1610945415295-d9bbf067e59c?w=400&h=300&fit=crop',
                    'desc' => 'Smartphone de última generación con cámara de 200MP, pantalla AMOLED de 6.8" y procesador Snapdragon 8 Gen 3.',
                ],
                [
                    'brand' => 'Apple',
                    'name' => 'MacBook Pro 16"',
                    'price' => '$2,499.99',
                    'img' => 'https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=400&h=300&fit=crop',
                    'desc' => 'Laptop profesional con chip M3 Pro, 18GB RAM, 512GB SSD. Perfecta para desarrollo y diseño.',
                ],
                [
                    'brand' => 'Sony',
                    'name' => 'WH-1000XM5',
                    'price' => '$399.99',
                    'img' => 'https://images.unsplash.com/photo-1546435770-a3e426bf472b?w=400&h=300&fit=crop',
                    'desc' => 'Auriculares inalámbricos con cancelación de ruido líder y 30h de batería.',
                ],
                [
                    'brand' => 'Dell',
                    'name' => 'Monitor UltraSharp 27"',
                    'price' => '$599.99',
                    'img' => 'https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=400&h=300&fit=crop',
                    'desc' => 'Monitor 4K IPS con precisión de color profesional, ideal para diseño gráfico.',
                ],
                [
                    'brand' => 'Logitech',
                    'name' => 'MX Master 3S',
                    'price' => '$99.99',
                    'img' => 'https://images.unsplash.com/photo-1527814050087-3793815479db?w=400&h=300&fit=crop',
                    'desc' => 'Mouse ergonómico con scroll electromagnético y conectividad multi-dispositivo.',
                ],
                [
                    'brand' => 'Nintendo',
                    'name' => 'Switch OLED',
                    'price' => '$349.99',
                    'img' => 'https://images.unsplash.com/photo-1578303512597-81e6cc155b3e?w=400&h=300&fit=crop',
                    'desc' => 'Consola híbrida con pantalla OLED de 7", audio mejorado y 64GB internos.',
                ],
                [
                    'brand' => 'Razer',
                    'name' => 'DeathAdder V3 Pro',
                    'price' => '$149.99',
                    'img' => 'https://root-nation.com/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2023/03/razer-deathadder-v3-pro-08.jpg.webp',
                    'desc' => 'Mouse gaming inalámbrico con sensor Focus Pro 30K y switches ópticos de 90M clicks.',
                ],
                [
                    'brand' => 'ASUS',
                    'name' => 'ROG Strix RTX 4080',
                    'price' => '$1,199.99',
                    'img' => 'https://images.unsplash.com/photo-1591488320449-011701bb6704?w=400&h=300&fit=crop',
                    'desc' => 'Tarjeta gráfica de alto rendimiento para gaming 4K y creación de contenido.',
                ]
            ] as $i => $product)
                <div class="col-md-3 col-sm-6">
                    <div class="product-card shadow-sm p-3 rounded h-100 d-flex flex-column">
                        <div class="product-image mb-3">
                            <img src="{{ $product['img'] }}" alt="{{ $product['name'] }}" class="img-fluid rounded">
                        </div>
                        <div class="product-brand fw-bold">{{ $product['brand'] }}</div>
                        <div class="product-name">{{ $product['name'] }}</div>
                        <div class="product-description small text-muted">{{ $product['desc'] }}</div>
                        <div class="product-price mt-2 fw-bold">{{ $product['price'] }}</div>
                        <div class="product-actions mt-auto d-flex justify-content-between">
                            <a href="/products/{{ $i+1 }}" class="btn btn-outline-primary btn-sm">Ver Detalles</a>
                            <a href="/products/{{ $i+1 }}/edit" class="btn btn-outline-secondary btn-sm">Editar</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>
@endsection
