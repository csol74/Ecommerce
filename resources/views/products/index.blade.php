@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<link rel="stylesheet" href="{{ asset('css/products-filter.css') }}">

@section('content')
<div class="navbar">
    <div class="navbar-brand">
        <div class="navbar-logo">
            <img src="/img/unab_logo.png" alt="Logo">
        </div>
        <h1 class="navbar-title">Mi Tienda</h1>
    </div>
    <nav>
        <a href="{{ url('/products') }}">Productos</a>
        <a href="{{ url('/products/create') }}">Crear Producto</a>
    </nav>
</div>

<div class="product-list">
    <div class="list-container">
        <h1>Nuestros Productos</h1>

        <a href="{{ url('/products/create') }}" class="btn btn-primary mb-3">+ Crear Nuevo Producto</a>

        <!-- Filtro por categoría -->
        <div class="category-filters-wrapper">
            <label class="filter-label">Filtrar por categoría:</label>
            <div class="category-buttons">
                <button class="category-filter active" data-category="all">
                    Todas
                </button>
                @foreach($categories as $category)
                    <button class="category-filter" data-category="{{ $category->id }}">
                        {{ $category->name }}
                    </button>
                @endforeach
            </div>
        </div>

        <!-- Estadísticas -->
        <div class="stats-box">
            <span><strong id="productCount">{{ $products->count() }}</strong> productos registrados</span>
        </div>

        <!-- Grid de productos -->
        <div class="products-grid" id="productsContainer">
            @forelse ($products as $product)
                <div class="product-card product-item" data-category="{{ $product->category_id }}">
                    <div class="product-image-card">
                        <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=400&h=300&fit=crop" alt="{{ $product->name }}">
                    </div>
                    <div class="product-card-body">
                        <div class="product-brand">{{ $product->brand->name ?? 'Sin marca' }}</div>
                        <h3 class="product-title">{{ $product->name }}</h3>
                        <p class="product-desc">{{ Str::limit($product->description, 80) }}</p>
                        <span class="category-badge">{{ $product->category->name ?? 'Sin categoría' }}</span>
                        <p class="price">${{ number_format($product->price, 2) }}</p>
                        <div class="product-actions">
                            <a href="{{ url('/products/' . $product->id) }}" class="btn btn-primary">Ver Detalles</a>
                            <a href="{{ url('/products/' . $product->id . '/edit') }}" class="btn btn-secondary">Editar</a>
                        </div>
                    </div>
                </div>
            @empty
                <p class="no-products">No hay productos disponibles.</p>
            @endforelse
        </div>

        <!-- Mensaje sin resultados -->
        <div id="noResults" class="no-results-message">
            No se encontraron productos en esta categoría.
        </div>
    </div>
</div>

<div class="footer">
    <p>&copy; 2025 Mi Tienda. Todos los derechos reservados.</p>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const categoryButtons = document.querySelectorAll('.category-filter');
    const productItems = document.querySelectorAll('.product-item');
    const noResultsMessage = document.getElementById('noResults');
    const productCountElement = document.getElementById('productCount');

    categoryButtons.forEach(button => {
        button.addEventListener('click', function() {
            categoryButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            const selectedCategory = this.getAttribute('data-category');
            let visibleCount = 0;

            productItems.forEach(item => {
                const itemCategory = item.getAttribute('data-category');

                if (selectedCategory === 'all') {
                    item.style.display = 'block';
                    visibleCount++;
                } else if (itemCategory === selectedCategory) {
                    item.style.display = 'block';
                    visibleCount++;
                } else {
                    item.style.display = 'none';
                }
            });

            productCountElement.textContent = visibleCount;
            noResultsMessage.style.display = visibleCount === 0 ? 'block' : 'none';
        });
    });
});
</script>
@endsection
