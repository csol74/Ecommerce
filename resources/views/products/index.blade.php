@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection
@section('content')
    <!-- ========== SECCIÓN DE PRODUCTOS ========== -->
    <main class="products-section">
    <div class="container">
        <h1>Gestión de Productos</h1>

        <div class="header-actions">
            <div>
                <input type="text" class="search-box" placeholder="Buscar productos..." id="searchInput">
            </div>
            <a href="/products/create" class="btn">+ Nuevo Producto</a>
        </div>

        <div class="stats">
            <div class="stats-content">
                <span><strong id="productCount">8</strong> productos registrados</span>
                <span>Total valor inventario: <strong>$12,450.00</strong></span>
            </div>
        </div>

        <div class="products-grid" id="productsContainer">
            <!-- Producto ejemplo 1 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1610945415295-d9bbf067e59c?w=400&h=300&fit=crop" alt="Samsung Galaxy S24 Ultra" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                </div>
                <div class="product-brand">Samsung</div>
                <div class="product-name">Galaxy S24 Ultra</div>
                <div class="product-description">Smartphone de última generación con cámara de 200MP, pantalla AMOLED de 6.8" y procesador Snapdragon 8 Gen 3.</div>
                <div class="product-price">$1,299.99</div>
                <div class="product-actions">
                    <a href="/products/1" class="btn-view">Ver Detalles</a>
                    <a href="/products/1/edit" class="btn-edit">Editar</a>
                </div>
            </div>

            <!-- Producto ejemplo 2 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=400&h=300&fit=crop" alt="MacBook Pro 16" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                </div>
                <div class="product-brand">Apple</div>
                <div class="product-name">MacBook Pro 16"</div>
                <div class="product-description">Laptop profesional con chip M3 Pro, 18GB RAM, 512GB SSD. Perfecta para desarrollo y diseño.</div>
                <div class="product-price">$2,499.99</div>
                <div class="product-actions">
                    <a href="/products/2" class="btn-view">Ver Detalles</a>
                    <a href="/products/2/edit" class="btn-edit">Editar</a>
                </div>
            </div>

            <!-- Producto ejemplo 3 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1546435770-a3e426bf472b?w=400&h=300&fit=crop" alt="Sony WH-1000XM5" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                </div>
                <div class="product-brand">Sony</div>
                <div class="product-name">WH-1000XM5</div>
                <div class="product-description">Auriculares inalámbricos con cancelación de ruido líder en la industria y 30 horas de batería.</div>
                <div class="product-price">$399.99</div>
                <div class="product-actions">
                    <a href="/products/3" class="btn-view">Ver Detalles</a>
                    <a href="/products/3/edit" class="btn-edit">Editar</a>
                </div>
            </div>

            <!-- Producto ejemplo 4 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=400&h=300&fit=crop" alt="Dell Monitor UltraSharp 27" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                </div>
                <div class="product-brand">Dell</div>
                <div class="product-name">Monitor UltraSharp 27"</div>
                <div class="product-description">Monitor 4K IPS con precisión de color profesional, ideal para diseño gráfico y edición de video.</div>
                <div class="product-price">$599.99</div>
                <div class="product-actions">
                    <a href="/products/4" class="btn-view">Ver Detalles</a>
                    <a href="/products/4/edit" class="btn-edit">Editar</a>
                </div>
            </div>

            <!-- Producto ejemplo 5 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1527814050087-3793815479db?w=400&h=300&fit=crop" alt="Logitech MX Master 3S" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                </div>
                <div class="product-brand">Logitech</div>
                <div class="product-name">MX Master 3S</div>
                <div class="product-description">Mouse ergonómico para productividad con scroll electromagnético y conectividad multi-dispositivo.</div>
                <div class="product-price">$99.99</div>
                <div class="product-actions">
                    <a href="/products/5" class="btn-view">Ver Detalles</a>
                    <a href="/products/5/edit" class="btn-edit">Editar</a>
                </div>
            </div>

            <!-- Producto ejemplo 6 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1578303512597-81e6cc155b3e?w=400&h=300&fit=crop" alt="Nintendo Switch OLED" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                </div>
                <div class="product-brand">Nintendo</div>
                <div class="product-name">Switch OLED</div>
                <div class="product-description">Consola híbrida con pantalla OLED de 7", audio mejorado y 64GB de almacenamiento interno.</div>
                <div class="product-price">$349.99</div>
                <div class="product-actions">
                    <a href="/products/6" class="btn-view">Ver Detalles</a>
                    <a href="/products/6/edit" class="btn-edit">Editar</a>
                </div>
            </div>

            <!-- Producto ejemplo 7 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://root-nation.com/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2023/03/razer-deathadder-v3-pro-08.jpg.webp" alt="Razer DeathAdder V3 Pro" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                </div>
                <div class="product-brand">Razer</div>
                <div class="product-name">DeathAdder V3 Pro</div>
                <div class="product-description">Mouse gaming inalámbrico con sensor Focus Pro 30K y switches ópticos de 90M clicks.</div>
                <div class="product-price">$149.99</div>
                <div class="product-actions">
                    <a href="/products/7" class="btn-view">Ver Detalles</a>
                    <a href="/products/7/edit" class="btn-edit">Editar</a>
                </div>
            </div>

            <!-- Producto ejemplo 8 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1591488320449-011701bb6704?w=400&h=300&fit=crop" alt="ASUS ROG Strix RTX 4080" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                </div>
                <div class="product-brand">ASUS</div>
                <div class="product-name">ROG Strix RTX 4080</div>
                <div class="product-description">Tarjeta gráfica de alto rendimiento para gaming 4K y creación de contenido con 16GB GDDR6X.</div>
                <div class="product-price">$1,199.99</div>
                <div class="product-actions">
                    <a href="/products/8" class="btn-view">Ver Detalles</a>
                    <a href="/products/8/edit" class="btn-edit">Editar</a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
