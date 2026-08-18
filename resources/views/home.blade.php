@extends('layouts.app')

@section('content')
<!-- Hero Carousel Section -->
<section class="carousel slide carousel-fade" data-bs-ride="carousel" id="heroCarousel">
    <div class="carousel-indicators custom-indicators">
        <button aria-current="true" aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#heroCarousel" type="button"></button>
        <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#heroCarousel" type="button"></button>
    </div>
    <div class="carousel-inner">
        <!-- Item 1 -->
        <div class="carousel-item active hero-carousel-item" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBQGXST-sg7Bl9rUSF_pet1T4uQ7rhDJNYI0kjSPqEnVztt1sTQQlnINLxEvNFbbZVXrSXQe_uBsA4ovkUbcD-lgj1GUlz8a-5F-1bGZlYfGpA00Q_xHOKYc3PRHg-NRkRnQ2oW1X8RAwN4CE9UVgkSlCxrfNa-ghcpOHJAV8iqaVkQClujhl6KLIRDgEwO3M7LU57U3SoBXeGLRPzBpUQCTRQoI3OYs4419R0mdJjyH5ZORBfCAYXA');">
            <div class="hero-overlay"></div>
            <div class="container-xl hero-content px-3 px-md-4 h-100 d-flex align-items-center">
                <div class="row w-100">
                    <div class="col-md-8 col-lg-6 text-white">
                        <span class="font-label-caps text-gold-metallic d-block mb-3">Colección Exclusiva</span>
                        <h1 class="display-3 mb-4 fw-light lh-sm">
                            Elegancia en <br><span class="fw-semibold">Cada Detalle</span>
                        </h1>
                        <p class="fs-5 mb-5 text-white-50">
                            Descubre nuestra selección curada de piezas de alta costura, diseñadas para elevar tu estilo personal con gracia y sofisticación.
                        </p>
                        <div class="d-flex flex-column flex-sm-row gap-3">
                            <button class="btn btn-gold px-4 py-3 text-uppercase font-label-caps border-0 rounded-1">Comprar ahora</button>
                            <button class="btn btn-outline-light-custom px-4 py-3 text-uppercase font-label-caps rounded-1">Ver novedades</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Item 2 -->
        <div class="carousel-item hero-carousel-item" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuADWYKerltVPySswJwV6BBuq4LQa3am-nCaJrkH33dhGmG-UKzjElRI7sf6I_QA0iTvBeNebKOpntapBy3MhPoJR8qfGBPj6o3HCaWbm7yvOQsehw8oa_KhFOYO_ouwwK59di0njqpAG3Hc467F3KRNNuxW7c_vpmmeW-xsn1xCX5ilGDln2VdY3ZlA1NQLspstG55Ro47WthP5V9j1MGNAt7uapURZpYOEiLabtr5AyBasYvV75yaT'); background-position: center 30%;">
            <div class="hero-overlay"></div>
            <div class="container-xl hero-content px-3 px-md-4 h-100 d-flex align-items-center">
                <div class="row w-100">
                    <div class="col-md-8 col-lg-6 ms-auto text-md-end text-white">
                        <span class="font-label-caps text-gold-metallic d-block mb-3">Nueva Temporada</span>
                        <h1 class="display-3 mb-4 fw-light lh-sm">
                            Estilo <br><span class="fw-semibold">Inconfundible</span>
                        </h1>
                        <p class="fs-5 mb-5 text-white-50 ms-md-auto" style="max-width: 500px;">
                            Expresa tu esencia con nuestra nueva colección. Materiales premium y diseños vanguardistas para la mujer contemporánea.
                        </p>
                        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-md-end">
                            <button class="btn btn-gold px-4 py-3 text-uppercase font-label-caps border-0 rounded-1">Descubrir Colección</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#heroCarousel" type="button">
        <span aria-hidden="true" class="carousel-control-icon bg-gold-metallic rounded-circle d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-chevron-left text-white fs-5"></i>
        </span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#heroCarousel" type="button">
        <span aria-hidden="true" class="carousel-control-icon bg-gold-metallic rounded-circle d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-chevron-right text-white fs-5"></i>
        </span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</section>
<!-- Promociones Actuales -->
<section class="py-5 my-md-5 container-xl px-3 px-md-4">
    <div class="text-center mb-5">
        <h2 class="fs-1 fw-semibold text-onyx-ink">Promociones Actuales</h2>
        <div class="divider"></div>
    </div>
    <div class="row g-4">
        <div class="col-md-6">
            <div class="promo-card img-zoom-container relative">
                <img alt="Sale Promotion" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCHAJMW1EdAWDqz7W_Gz-GggK2Ji7NhwoMZcUAGVEFc_P9xATOcHp5sBswguLguAWg41Crd8LNqV8Qe3r82IJMD_oh6CNnkw80tUtCivMP2qN0Ilw_F3r1yTnzWySb-Z5ZEnAkh8sd8uRQFSuVmI-x7_y5nkSPlZ8DElNVKrUl16PhHqD2355kcpanI6mr_YztUkB9zo-R0TSqJYKsaZDPi3BACTDgg2QZMcV9Yi-ccADcpVyPvYpT4">
                <div class="promo-overlay"></div>
                <div class="promo-content">
                    <span class="text-gold-metallic font-label-caps mb-2">Mid-Season Sale</span>
                    <h3 class="text-white display-5 fw-bold mb-3">Hasta 40% OFF</h3>
                    <p class="text-white-50 mb-4">Encuentra tus favoritos de la temporada a precios irresistibles.</p>
                    <a class="btn btn-white px-4 py-2 text-decoration-none rounded-1" href="#">Ver Ofertas</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="promo-card img-zoom-container relative">
                <img alt="New Arrival Promotion" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA0_61d9Xu6dVcIw8TlErddh6GbM4jydxzv_KkDTTzX5SNXRj_QAaU95JxeVlfBlhFe2kgQIHNomvec7exf_TSlha9c3Lhs4sI51encP6wZYEB9KOkfY4jUE-JVTiW1slZUMzLVOEbvA4Fb9LhsCvS0SpFuJ0hRACtnKHvl5Vaudf_jrazCHmGKerx_RzvnmC1tEz-arkC5R-eb_7dbyP2ugIti9HzPpPXGGYqmlDJmQ5ppWuO-6V7B">
                <div class="promo-overlay"></div>
                <div class="promo-content">
                    <span class="text-gold-metallic font-label-caps mb-2">Nuevos Ingresos</span>
                    <h3 class="text-white display-5 fw-bold mb-3">Aura Luxe</h3>
                    <p class="text-white-50 mb-4">Descubre la nueva colección de joyería fina diseñada para brillar.</p>
                    <a class="btn btn-white px-4 py-2 text-decoration-none rounded-1" href="#">Descubrir</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Productos Destacados -->
<section class="py-5 bg-champagne-mist-30">
    <div class="container-xl px-3 px-md-4 my-md-5">
        <div class="text-center mb-5">
            <h2 class="fs-1 fw-semibold text-onyx-ink">Productos Destacados</h2>
            <div class="divider"></div>
            <p class="text-secondary-custom">Seleccionados cuidadosamente para complementar tu estilo elegante y sofisticado.</p>
        </div>
        <div class="row g-4">
            <!-- Product 1 -->
            <div class="col-sm-6 col-lg-3">
                <div class="card product-card hover-lift h-100">
                    <a href="{{route('product.detail')}}" class="img-zoom-container product-img-wrap">
                        <span class="position-absolute top-0 start-0 m-3 badge badge-new font-label-caps px-2 py-1 z-1">Nuevo</span>
                        <img alt="Silk Dress" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCoazLWzngF32STP4MqJojsWQooePOQShH99HvAeULmdSDlyQjkKjztihqu_UdV22Zdnwd_x75wRLl7eP41OvMi3YSGk4pcGufa8BlQ32zT3yA0FMrZjEb0Ub-PHBecYCmALHKdkjvlZr8NPeAfTvQMV88l_YoWmX9nHQWrkRbQlswT8TitDZvJ6M6JgZAMrarIIAhENPepFUuVJQyCR1_k2_sNlgIvDj-r2g74_trIoyoXsCjzuqTL">
                        <div class="product-overlay"></div>
                    </a>
                    <div class="card-body text-center p-4">
                        <div class="text-gold-metallic small mb-2">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                        <h5 class="card-title text-onyx-ink fw-semibold fs-6 mb-2">Vestido de Seda Midnight</h5>
                        <p class="card-text fs-5 fw-medium text-secondary-custom mb-3">$350.00</p>
                        <button class="btn btn-gold w-100 py-2 fw-medium rounded-1"><i class="fa-solid fa-cart-plus me-2"></i> Agregar</button>
                    </div>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="col-sm-6 col-lg-3">
                <div class="card product-card hover-lift h-100">
                    <a href="{{route('product.detail')}}" class="img-zoom-container product-img-wrap">
                        <span class="position-absolute top-0 start-0 m-3 badge badge-sale font-label-caps px-2 py-1 z-1">Oferta</span>
                        <img alt="Perfume" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDhx6VNf7filXGLxNostS8Mq4Dj85fUQG5sxsxO-l7C4gqQIlxwxu3R-VWm3PksFxny3nW9oA6u8OTLv7v7H2mxfQNQitUoBvRIfAOHt37kMcA27rgYlDJ4hnGqoFEe-lM7jqjN3l7u3aQ_8rHkmXJ66QqCLVErkN_-1ID4a53hJOEbZDELtCh6NDyTnuIHjrrKrIXCKngCNsstoctbgAdqLoeMJK-e7xj2KF1fgzIb82kW_3S5tFTv">
                    </a>
                    <div class="card-body text-center p-4">
                        <div class="text-gold-metallic small mb-2">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star-half-stroke"></i>
                        </div>
                        <h5 class="card-title text-onyx-ink fw-semibold fs-6 mb-2">L'Essence de Aura</h5>
                        <div class="d-flex justify-content-center gap-2 mb-3">
                            <span class="fs-5 fw-medium text-muted text-decoration-line-through">$180.00</span>
                            <span class="fs-5 fw-medium text-gold-metallic">$145.00</span>
                        </div>
                        <button class="btn btn-gold w-100 py-2 fw-medium rounded-1"><i class="fa-solid fa-cart-plus me-2"></i> Agregar</button>
                    </div>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="col-sm-6 col-lg-3">
                <div class="card product-card hover-lift h-100">
                    <a href="{{route('product.detail')}}" class="img-zoom-container product-img-wrap">
                        <img alt="Necklace" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCH4I1v-AUItjwHZWjPlm97cVxFOnBnbXKoW4ediyGGkYogu2u8wApQNZMJJ8RJ5KagIiULLch4qPjcY2LOfdP8OjSAzzzfVREoeytTm8mS0kxla5PQPtwkxSD6boHjPth2tkOqJjr0v2bIIA4Hl2KH_-WIOtkRfsJadwWJuGVeWSZjlPiuTYH3zEZBc_geyNiRm-wVxKitQ02avFMjCYlbrF6jucDLlvCklBAbAxuaSfPgGX0ZF2-j">
                    </a>
                    <div class="card-body text-center p-4">
                        <div class="text-gold-metallic small mb-2">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                        <h5 class="card-title text-onyx-ink fw-semibold fs-6 mb-2">Collar Diamante Étoile</h5>
                        <p class="card-text fs-5 fw-medium text-secondary-custom mb-3">$890.00</p>
                        <button class="btn btn-gold w-100 py-2 fw-medium rounded-1"><i class="fa-solid fa-cart-plus me-2"></i> Agregar</button>
                    </div>
                </div>
            </div>
            <!-- Product 4 -->
            <div class="col-sm-6 col-lg-3">
                <div class="card product-card hover-lift h-100">
                    <a href="{{route('product.detail')}}" class="img-zoom-container product-img-wrap">
                        <span class="position-absolute top-0 start-0 m-3 badge badge-new font-label-caps px-2 py-1 z-1">Nuevo</span>
                        <img alt="Bag" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDzqk3zNA5cEzRYAz3bD3btwH78NMONNKdlBEAra8Fd6IrAGueEmU5RJ37uOowkgh9wkk3ghjtYklO6JniLMLmmh4OGCyieuKPRrJzdjb-z4-tunPIgm1t76D8-SlpCiFIXu_Y7DbIILzmWEQSJfFID13iRb1B_EGWf8LIerUojE35EkyhBY8EinWrapL-wl1_tQ-QPBo9KJWWN4KpM9uSxcPQ7JE0-d-qVOO7LOflJD3iclCwQf3e7">
                    </a>
                    <div class="card-body text-center p-4">
                        <div class="text-gold-metallic small mb-2">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
                        </div>
                        <h5 class="card-title text-onyx-ink fw-semibold fs-6 mb-2">Bolso de Cuero Noir</h5>
                        <p class="card-text fs-5 fw-medium text-secondary-custom mb-3">$420.00</p>
                        <button class="btn btn-gold w-100 py-2 fw-medium rounded-1"><i class="fa-solid fa-cart-plus me-2"></i> Agregar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Explora Categorías -->
<section class="py-5 my-md-5 container-xl px-3 px-md-4 bg-surface-white">
    <div class="text-center mb-5">
        <h2 class="fs-1 fw-semibold text-onyx-ink">Explora Categorías</h2>
        <div class="divider"></div>
    </div>
    <div class="cat-grid">
        <!-- Fashion -->
        <a class="cat-item img-zoom-container cat-fashion position-relative d-block text-decoration-none" href="#">
            <img alt="Fashion" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC8PuUxh53I5fXJqQv1KHnVykcANvpA3YxomfB84o7fzdh--CfsrEY8J6XTTs-znCHirGKBxsd9dyCxRpEyQH_Kd63BhRN_5mnaM7reI1mQSqDvClAv31-rugem1gPF6BOmv3cI82o5RkWitTCXYNE_lND2DITY9z6hHoQe-uqoCBxqazVAUa1RLL-rICkaIYbQlMaFx8P6oE5xXDsgzwCZ9_SCpWZkBMnehtrigg3B9_TZnu1r4T6O">
            <div class="cat-overlay"></div>
            <div class="cat-content">
                <h3 class="fs-2 fw-bold mb-2 text-white">Fashion</h3>
                <span class="cat-link">Ver Colección <i class="fa-solid fa-arrow-right"></i></span>
            </div>
        </a>
        <!-- Beauty -->
        <a class="cat-item img-zoom-container cat-small position-relative d-block text-decoration-none" href="#">
            <img alt="Beauty" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCBy1-Q58gKF52YJNEVcW9d3Vr3vIiE5E_sGBXvYDTnYTig40QrDbNvy6NgioooEkQmY7j5wW4cUoT4YaHuGh3Ndp6ahVad_yjfu35-n8mM0y6RPJrRmXIFpcF1loNz0tAe9Vy1uPWvui_eWaDcRmrioJsbzxZnfAbq7G7URUkEg6379TnPWYJsG2u5xkKiWb9PV-rQR5uhdEej1Ukob67dQzfyw9PSfJhpkZ8_9MY5tYfgY5jMwNTv">
            <div class="cat-overlay"></div>
            <div class="cat-content">
                <h3 class="fs-4 fw-bold mb-2 text-white">Beauty</h3>
                <span class="cat-link">Descubrir <i class="fa-solid fa-arrow-right"></i></span>
            </div>
        </a>
        <!-- Jewelry -->
        <a class="cat-item img-zoom-container cat-small position-relative d-block text-decoration-none" href="#">
            <img alt="Jewelry" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCyQXsBmeqMIS6Vb_QJ3BWWjNPCc0A4IvznLdci1KmU3Ia60US9p65G9r_6lVScpOkToQIm67GJLVxT72665Yqr6hrfI-deMFZXhaXfBuypHIEAc2fg8TD7PPmjA4rF2myWmbhQ8PYqzFZ7dL57iKKwU3xC94CkoXlOSwYDVgortRXGG37EocXSyfo0uX53xYnvjbBjHWFDh96sMcXOyOkEV1B-zh_8li92RDDU2ZBceLHpA4HkwAWq">
            <div class="cat-overlay"></div>
            <div class="cat-content">
                <h3 class="fs-4 fw-bold mb-2 text-white">Jewelry</h3>
                <span class="cat-link">Brillar <i class="fa-solid fa-arrow-right"></i></span>
            </div>
        </a>
    </div>
</section>


<!-- Bootstrap 5 JS Bundle -->

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const header = document.getElementById('main-header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('shadow-md');
                header.style.position = 'fixed';
            } else {
                header.classList.remove('shadow-md');
                header.style.position = 'absolute';
            }
        });
    });
</script>
@endsection

