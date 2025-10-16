@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
@endsection
@section('content')
<!-- ========== SECCIÓN DE DETALLE DE PRODUCTO ========== -->
    <main class="main-content">
        <div class="container">
            <div class="navigation">
                <a href="/products">← Volver al listado</a>
                <a href="/products/create">Crear nuevo producto</a>
            </div>

            <div class="product-detail">
                <div class="product-header">
                    <div class="product-brand">Samsung</div>
                    <h1>Galaxy S24 Ultra</h1>
                </div>

                <div class="product-content">
                    <div class="product-image-section">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1610945415295-d9bbf067e59c?w=500&h=400&fit=crop" alt="Samsung Galaxy S24 Ultra">
                        </div>
                    </div>

                    <div class="product-info">
                        <div class="price-section">
                            <div class="price">$1,299.99</div>
                            <div class="price-label">Precio actual</div>
                        </div>

                        <div class="info-section">
                            <h3>Descripción</h3>
                            <p>El Samsung Galaxy S24 Ultra es el smartphone más avanzado de la serie Galaxy. Cuenta con una impresionante cámara de 200MP, pantalla Dynamic AMOLED 2X de 6.8 pulgadas, procesador Snapdragon 8 Gen 3 para un rendimiento excepcional, y S Pen integrado para mayor productividad. Diseñado con materiales premium y resistencia al agua IP68.</p>
                        </div>

                        <div class="specifications">
                            <h3 style="margin-top: 0;">Especificaciones</h3>
                            <div class="spec-grid">
                                <div class="spec-item">
                                    <span class="spec-label">Pantalla:</span>
                                    <span class="spec-value">6.8" AMOLED</span>
                                </div>
                                <div class="spec-item">
                                    <span class="spec-label">Procesador:</span>
                                    <span class="spec-value">Snapdragon 8 Gen 3</span>
                                </div>
                                <div class="spec-item">
                                    <span class="spec-label">RAM:</span>
                                    <span class="spec-value">12GB</span>
                                </div>
                                <div class="spec-item">
                                    <span class="spec-label">Almacenamiento:</span>
                                    <span class="spec-value">256GB</span>
                                </div>
                                <div class="spec-item">
                                    <span class="spec-label">Cámara:</span>
                                    <span class="spec-value">200MP + 12MP + 10MP</span>
                                </div>
                                <div class="spec-item">
                                    <span class="spec-label">Batería:</span>
                                    <span class="spec-value">5000mAh</span>
                                </div>
                            </div>
                        </div>

                        <div class="actions">
                            <a href="/products/1/edit" class="btn btn-warning">Editar Producto</a>
                            <button class="btn btn-primary" onclick="addToCart()">Añadir al Carrito</button>
                            <button class="btn btn-danger" onclick="confirmDelete()">Eliminar</button>
                        </div>
                    </div>
                </div>

                <div class="product-meta">
                    <div class="meta-grid">
                        <div class="meta-item">
                            <div class="meta-value">En Stock</div>
                            <div class="meta-label">Disponibilidad</div>
                        </div>
                        <div class="meta-item">
                            <div class="meta-value">PRD-001</div>
                            <div class="meta-label">Código del Producto</div>
                        </div>
                        <div class="meta-item">
                            <div class="meta-value">4.8/5</div>
                            <div class="meta-label">Calificación</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
