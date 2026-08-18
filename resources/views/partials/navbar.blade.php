<!-- Announcement Bar -->
<div class="bg-onyx-ink text-white text-center py-2 font-label-caps position-relative" style="z-index: 1040;">
    Envío gratuito en pedidos superiores a $150 | Descubre la nueva colección
</div>
<!-- Header -->
<header class="bg-surface-white sticky-top border-bottom border-champagne-mist shadow-sm" style="z-index: 1030;">
    <div class="container max-w-container px-3 px-md-4 py-3 d-flex justify-content-between align-items-center">
        <!-- Brand Logo -->
        <a class="text-decoration-none fs-2 fw-semibold text-primary-custom" href="#" style="letter-spacing: -0.02em;">M&amp;ZENTRO</a>
        <!-- Desktop Navigation -->
        <nav class="d-none d-md-flex gap-4 fw-medium fs-5">
            <a class="text-decoration-none nav-link-custom {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Inicio</a>
            <a class="text-decoration-none nav-link-custom {{ request()->routeIs('shop') ? 'active' : '' }}" href="{{ route('shop') }}">Tienda</a>
            <a class="text-decoration-none nav-link-custom {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">Nosotros</a>
            <a class="text-decoration-none nav-link-custom {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contáctanos</a>
        </nav>
        <!-- Trailing Icons -->
        <div class="d-flex align-items-center gap-2">
            <button class="icon-btn">
                <i class="fa-regular fa-heart fs-5"></i>
            </button>
            <button class="icon-btn">
                <i class="fa-regular fa-user fs-5"></i>
            </button>
            <button aria-controls="cartOffcanvas" class="icon-btn position-relative" data-bs-target="#cartOffcanvas" data-bs-toggle="offcanvas">
                <i class="fa-solid fa-shopping-bag fs-5"></i>
                <span class="cart-badge bg-prestige-green text-white rounded-circle fw-bold">2</span>
            </button>
            <!-- Mobile Menu Toggle -->
            <button class="icon-btn d-md-none" id="mobileMenuBtn">
                <i class="fa-solid fa-bars fs-5"></i>
            </button>
        </div>
    </div>
</header>
<!-- Mobile Navigation Shell -->
<nav class="mobile-nav">
    <a class="mobile-nav-item active text-decoration-none" href="#">
        <i class="fa-solid fa-house"></i>
        <span>Inicio</span>
    </a>
    <a class="mobile-nav-item text-decoration-none" href="#">
        <i class="fa-solid fa-layer-group"></i>
        <span>Categorías</span>
    </a>
    <a class="mobile-nav-item text-decoration-none" href="#">
        <i class="fa-regular fa-heart"></i>
        <span>Deseos</span>
    </a>
    <a class="mobile-nav-item text-decoration-none" href="#">
        <i class="fa-regular fa-user"></i>
        <span>Perfil</span>
    </a>
</nav>