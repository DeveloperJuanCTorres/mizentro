<!-- Announcement Bar -->
<div class="bg-onyx-ink text-white text-center py-2 font-label-caps position-relative" style="z-index: 1040;">
    Envío gratuito en pedidos superiores a $150 | Descubre la nueva colección
</div>

<!-- Header -->
<header class="bg-surface-white sticky-top border-bottom border-champagne-mist shadow-sm" style="z-index: 1030;">
    <div class="container max-w-container px-3 px-md-4 py-3 d-flex justify-content-between align-items-center">

        <!-- Brand Logo -->
        <a class="text-decoration-none fs-2 fw-semibold text-primary-custom" href="#" style="letter-spacing: -0.02em;">
            M&ZENTRO
        </a>

        <!-- Desktop Navigation (NO SE MODIFICA) -->
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

            <button aria-controls="cartOffcanvas"
                class="icon-btn position-relative"
                data-bs-target="#cartOffcanvas"
                data-bs-toggle="offcanvas">

                <i class="fa-solid fa-shopping-bag fs-5"></i>

                <span class="cart-badge bg-prestige-green text-white rounded-circle fw-bold">2</span>
            </button>

            <!-- Mobile Menu Toggle -->
            <button class="icon-btn d-md-none"
                data-bs-toggle="offcanvas"
                data-bs-target="#mobileMenuOffcanvas"
                aria-controls="mobileMenuOffcanvas">

                <i class="fa-solid fa-bars fs-5"></i>

            </button>

        </div>

    </div>
</header>

<div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenuOffcanvas">

    <div class="offcanvas-header border-bottom">

        <h5 class="fw-bold mb-0 text-primary-custom">M&ZENTRO</h5>

        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>

    </div>

    <div class="offcanvas-body d-flex flex-column">

        <!-- Buscador -->
        <div class="mb-4">

            <div class="input-group">

                <span class="input-group-text bg-light border-end-0">
                    <i class="fas fa-search text-muted"></i>
                </span>

                <input type="text"
                    class="form-control border-start-0"
                    placeholder="Buscar productos...">

            </div>

        </div>

        <!-- Navegación -->
        <div class="mobile-menu-links">

            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                <i class="fas fa-house"></i>
                Inicio
            </a>

            <a href="{{ route('shop') }}" class="{{ request()->routeIs('shop') ? 'active' : '' }}">
                <i class="fas fa-store"></i>
                Tienda
            </a>

            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">
                <i class="fas fa-users"></i>
                Nosotros
            </a>

            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                <i class="fas fa-envelope"></i>
                Contáctanos
            </a>

        </div>

        <div class="mt-auto pt-4 border-top">

            <small class="text-muted d-block mb-3">Síguenos</small>

            <div class="d-flex gap-3">

                <i class="fab fa-instagram fs-5"></i>
                <i class="fab fa-facebook fs-5"></i>
                <i class="fab fa-tiktok fs-5"></i>

            </div>

        </div>

    </div>

</div>