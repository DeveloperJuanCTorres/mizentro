@extends('layouts.app')

@section('content')

<div class="container-xl px-3 px-md-4 py-5" style="padding-top: var(--mz-section-gap); padding-bottom: var(--mz-section-gap);">
    <div class="row g-4">
        <!-- Gallery (Left) -->
        <div class="col-12 col-md-7">
            <div class="d-flex flex-column-reverse flex-md-row gap-3 gallery-container">
                <!-- Thumbnails -->
                <div class="d-flex flex-row flex-md-column gap-3 thumbnails-container scrollbar-hide pb-2 pb-md-0 flex-shrink-0">
                    <img alt="Emerald Gown 1" class="thumbnail-img active" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA4-8j2PS10tkNrT4Ji4AZdDEDfo4hKQr2VxXyh8bo9aw-PEKHvlrrYDqGQV7p8r1D_yeie9vazsi2RwL5AOEw1qz_LXXJ6iuQdSPZ3gfXEHhYm25F8SemTIuNNZF4pM9ZxVwtstFKMdbojXp3tHyaKj2YES1QdlZxnKWennXXlCA5IrDwBPfE1Gv26rsYKMeDBDsZ82O2yzjx5oMdjjGqXlGaYWIgb21E8qWObH_Sxd8bsba8gJbtK" />
                    <img alt="Emerald Gown 2" class="thumbnail-img" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAaQTQ4YpJnXftbT1FfG92Wbjc_yPHyaxy_DMVrOyIxHn7gMO7du634LoihNZX6skVhGOX_o7Q7ZBv-_twwnO0Cg-5QvkxF4HPToPQ_4lEw7-IUpAlD8QGjKfuAlw_9q3nX02JodHaVXucHvSPgOfCrsWIuT2t2Tw2Zbu9ts1hnODDNgvmGrnfM5IBaAWhrAtGV7fWxYKTC-AvuWGKCOpyuD4C4GqBP3OQ2c6YSO4PqNEL4SRFgVVK9" />
                    <img alt="Emerald Gown 3" class="thumbnail-img" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCGJnFnFkc-vHxSDSuv667N-ppClrPguNr3o8yT43HW8D9uBagOm3pgzOSRMJuMUPJUEeFo3W0a4Rl56nhAc0MPBvDFEOKBHly4WJPiBtVVEg0FJAioT6uSmIPxdJ505qxc_DFkTvQhzmOtOXVQEo3Y9fOzNmC1dmOOYgAxlMc9_9to8zsJCmbf--lz2W0842uX0ZOWzmSj5iUyQzY5mm9MaKPAbfQRyfYKv_3HYWmv8xriaZiTeIGl" />
                </div>
                <!-- Main Image -->
                <div class="flex-grow-1 main-image-wrapper">
                    <div class="zoom-container">
                        <img alt="Emerald Gown Main" class="zoom-image" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDpNC5fJ86-i7rT3cFBFGy5OFk7t6aM5J8skOb_sI50kPCnJK8ZFtQAJEmom9ghXY-HiIqLGTGf2pHbw6aFWcHMq0ZUTNAN1XlSIFFAMctHHZiMlAYJt0Hdg601kRdKowKvf-yDGAzLCxbKONdNNIPU_Vwa5D_g-TInlooEuHBmrShzfV1RBbQ0GcwXZ3Aciw5rTgqxAJyh82S4Lj1Ovp7Fvbb4qCiCMuUI85HQMhf6To9gn2UwzMjC" />
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Info (Right) -->
        <div class="col-12 col-md-5 d-flex flex-column gap-4">
            <!-- Header Info -->
            <div>
                <h1 class="mb-2 h2">Emerald Silk Evening Gown</h1>
                <div class="d-flex align-items-center gap-3 mb-3 text-muted small">
                    <span>SKU: MZ-8492-EMR</span>
                    <div class="d-flex align-items-center" style="color: var(--mz-primary-container);">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                        <span class="text-muted ms-1">(4.8)</span>
                    </div>
                </div>
                <div class="d-flex align-items-baseline gap-2 text-price mb-3">
                    <span>$895.00</span>
                    <span class="text-muted text-decoration-line-through fs-5">$1,200.00</span>
                </div>
                <p class="text-muted">
                    Crafted from the finest pure silk, this elegant evening gown features a fluid silhouette and delicate draping. Perfect for sophisticated soirées and special occasions.
                </p>
            </div>
            <hr style="border-color: var(--mz-champagne-mist); opacity: 1;" />
            <!-- Variants -->
            <div class="d-flex flex-column gap-4">
                <!-- Color -->
                <div>
                    <span class="d-block mb-2 fw-bold text-uppercase" style="font-size: 12px; letter-spacing: 0.15em;">Color: <span class="fw-normal text-capitalize" style="letter-spacing: normal;">Emerald Green</span></span>
                    <div class="d-flex gap-2">
                        <button class="color-btn active" style="background-color: #00510e;"></button>
                        <button class="color-btn" style="background-color: #1A1A1A;"></button>
                        <button class="color-btn" style="background-color: #D4AF37;"></button>
                    </div>
                </div>
                <!-- Size -->
                <div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="d-block fw-bold text-uppercase" style="font-size: 12px; letter-spacing: 0.15em;">Size</span>
                        <a class="small text-muted text-decoration-underline" href="#" style="text-underline-offset: 2px;">Size Guide</a>
                    </div>
                    <div class="row g-2">
                        <div class="col-3"><button class="size-btn">XS</button></div>
                        <div class="col-3"><button class="size-btn active">S</button></div>
                        <div class="col-3"><button class="size-btn">M</button></div>
                        <div class="col-3"><button class="size-btn">L</button></div>
                    </div>
                </div>
            </div>
            <!-- Actions -->
            <div class="d-flex flex-column gap-3 mt-2">
                <div class="d-flex gap-3">
                    <!-- Quantity -->
                    <div class="qty-control flex-shrink-0">
                        <button class="qty-btn"><i class="fa-solid fa-minus fs-6"></i></button>
                        <span class="fw-medium">1</span>
                        <button class="qty-btn"><i class="fa-solid fa-plus fs-6"></i></button>
                    </div>
                    <!-- Add to Cart -->
                    <button class="btn-add-cart flex-grow-1 w-100">
                        Agregar al carrito
                    </button>
                </div>
                <!-- Buy Now -->
                <button class="btn-buy-now w-100">
                    Comprar ahora
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    // Simple zoom effect for main image
    const zoomContainer = document.querySelector('.zoom-container');
    const zoomImage = document.querySelector('.zoom-image');

    zoomContainer.addEventListener('mousemove', (e) => {
        const {
            left,
            top,
            width,
            height
        } = zoomContainer.getBoundingClientRect();
        const x = (e.clientX - left) / width * 100;
        const y = (e.clientY - top) / height * 100;
        zoomImage.style.transformOrigin = `${x}% ${y}%`;
    });
</script>
@endsection

<style>
    :root {
        --bs-body-font-family: 'Montserrat', sans-serif;
        --bs-body-bg: #fcf9f8;
        --bs-body-color: #1c1b1b;
        --bs-primary: #735c00;
        --bs-secondary: #645e4c;

        --mz-champagne-mist: #F3E9D2;
        --mz-primary-container: #d4af37;
        --mz-on-primary-container: #554300;
        --mz-surface-container: #f0eded;
        --mz-surface-white: #FFFFFF;
        --mz-outline-variant: #d0c5af;
        --mz-on-surface-variant: #4d4635;
        --mz-onyx-ink: #1A1A1A;
        --mz-gold-metallic: #D4AF37;
        --mz-surface-tint: #735c00;

        --mz-section-gap: 5rem;
        --mz-element-gap: 1.5rem;
    }

    body {
        font-family: var(--bs-body-font-family);
        background-color: var(--bs-body-bg);
        color: var(--bs-body-color);
        line-height: 1.6;
    }

    h1,
    .h1 {
        font-weight: 500;
        line-height: 1.2;
    }

    .brand-text {
        font-weight: 600;
        letter-spacing: -0.02em;
        color: var(--bs-primary);
        font-size: 2rem;
    }

    /* Navbar Customization */
    .navbar-custom {
        background-color: var(--mz-surface-white);
        border-bottom: 1px solid var(--mz-champagne-mist);
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        padding: 1rem 0;
    }

    .navbar-custom .nav-link {
        color: var(--bs-secondary);
        font-weight: 400;
        transition: all 0.3s ease;
        padding: 0.5rem 1rem;
    }

    .navbar-custom .nav-link:hover {
        color: var(--bs-primary);
        background-color: rgba(243, 233, 210, 0.2);
    }

    .navbar-custom .nav-link.active {
        color: var(--bs-primary);
        border-bottom: 2px solid var(--bs-primary);
    }

    .icon-btn {
        background: none;
        border: none;
        color: var(--mz-gold-metallic);
        padding: 0.5rem;
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    .icon-btn:hover {
        background-color: rgba(243, 233, 210, 0.2);
    }

    /* Gallery Customization */
    .gallery-container {
        height: auto;
    }

    @media (min-width: 768px) {
        .gallery-container {
            height: 600px;
        }

        .thumbnails-container {
            max-width: 100px;
            overflow-y: auto;
        }
    }

    .thumbnail-img {
        width: 80px;
        height: 96px;
        object-fit: cover;
        border-radius: 0.5rem;
        border: 1px solid transparent;
        opacity: 0.7;
        transition: opacity 0.3s;
        cursor: pointer;
    }

    @media (min-width: 768px) {
        .thumbnail-img {
            width: 96px;
            height: 128px;
        }
    }

    .thumbnail-img:hover {
        opacity: 1;
    }

    .thumbnail-img.active {
        border: 2px solid var(--bs-primary);
        opacity: 1;
    }

    .main-image-wrapper {
        background-color: var(--mz-surface-container);
        border-radius: 0.75rem;
        overflow: hidden;
        height: 100%;
    }

    .zoom-container {
        overflow: hidden;
        position: relative;
        cursor: zoom-in;
        height: 100%;
        width: 100%;
    }

    .zoom-image {
        transition: transform 0.3s ease;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .zoom-container:hover .zoom-image {
        transform: scale(1.5);
    }

    /* Product Info Customization */
    .text-price {
        font-size: 1.5rem;
        font-weight: 500;
        line-height: 1;
    }

    .color-btn {
        width: 2rem;
        height: 2rem;
        border-radius: 50%;
        border: none;
        padding: 0;
        transition: all 0.3s ease;
        position: relative;
    }

    .color-btn::after {
        content: '';
        position: absolute;
        top: -4px;
        left: -4px;
        right: -4px;
        bottom: -4px;
        border-radius: 50%;
        border: 2px solid transparent;
        transition: border-color 0.3s ease;
    }

    .color-btn.active::after {
        border-color: var(--bs-primary);
    }

    .color-btn:hover:not(.active)::after {
        border-color: var(--mz-champagne-mist);
    }

    .size-btn {
        border: 1px solid var(--mz-outline-variant);
        background: transparent;
        padding: 0.5rem 0;
        border-radius: 0.5rem;
        width: 100%;
        transition: all 0.3s ease;
    }

    .size-btn:hover {
        border-color: var(--bs-primary);
        background-color: rgba(243, 233, 210, 0.2);
    }

    .size-btn.active {
        border-color: var(--bs-primary);
        background-color: rgba(243, 233, 210, 0.3);
        font-weight: 500;
    }

    .qty-control {
        border: 1px solid var(--mz-outline-variant);
        border-radius: 0.5rem;
        background-color: var(--mz-surface-white);
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0.5rem 1rem;
        width: 120px;
    }

    .qty-btn {
        background: none;
        border: none;
        color: var(--mz-on-surface-variant);
        padding: 0;
        transition: color 0.3s ease;
    }

    .qty-btn:hover {
        color: var(--bs-primary);
    }

    .btn-add-cart {
        background-color: var(--mz-primary-container);
        color: var(--mz-surface-white);
        border: none;
        border-radius: 0.5rem;
        padding: 0.75rem 1.5rem;
        font-weight: 500;
        transition: background-color 0.3s ease;
    }

    .btn-add-cart:hover {
        background-color: var(--mz-surface-tint);
        color: var(--mz-surface-white);
    }

    .btn-buy-now {
        background-color: var(--mz-onyx-ink);
        color: var(--mz-surface-white);
        border: none;
        border-radius: 0.5rem;
        padding: 0.75rem 1.5rem;
        font-weight: 500;
        transition: background-color 0.3s ease;
    }

    .btn-buy-now:hover {
        background-color: var(--bs-body-color);
        color: var(--mz-surface-white);
    }

    /* Footer */
    .footer-custom {
        background-color: var(--mz-surface-container);
        border-top: 1px solid var(--mz-champagne-mist);
        padding: var(--mz-section-gap) 0;
    }

    .footer-link {
        color: var(--mz-on-surface-variant);
        text-decoration: underline;
        text-underline-offset: 4px;
        transition: color 0.3s ease;
        display: block;
        margin-bottom: 0.5rem;
    }

    .footer-link:hover {
        color: var(--mz-gold-metallic);
    }

    /* Hide scrollbar for thumbnails */
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }

    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>