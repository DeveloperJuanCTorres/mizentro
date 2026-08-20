@extends('layouts.app')

@section('content')

<div class="d-flex flex-column mb-5">
    <!-- Hero Section -->
    <section class="hero-section mb-5">
        <div class="hero-bg" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCy3Pms3eadAHBuzjWt_F_0I6AO_RWEW5qunUfowdLVAX6V9yiO0-3SiX_T9d3_8BsEO9mjWgTbP8jKkBDvBDMyWnY53oHhveoSB-rnjks-o1G5CeBZYYaSoi9oUUQ5H4QQ3Zj6UZA-1645R-Sau1vqgWW_v0tAYnJKi55mIJ-1qQ6weo2mmfKFJ1VnJkBjIMro1S9TVAO5_D8Wd9JFGtSG2QdlfPt0L6J0mH0uejmrUcdCJpwyL2mt')"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content d-flex flex-column align-items-center">
            <span class="font-label-caps text-gold-metallic mb-3">M&amp;ZENTRO Boutique</span>
            <h1 class="font-display-lg mb-4 text-white">Nuestra Esencia</h1>
            <div style="width: 4rem; height: 1px; background-color: var(--color-gold); margin-bottom: 1.5rem;"></div>
            <p class="fs-5 max-w-2xl mx-auto opacity-75 text-white" style="max-width: 600px;">
                Redefiniendo el lujo contemporáneo a través de la artesanía meticulosa y un diseño que trasciende las temporadas.
            </p>
        </div>
    </section>
    <!-- Brand History: Asymmetric Layout -->
    <section class="container custom-container py-5">
        <div class="row align-items-center g-5">
            <div class="col-md-5 order-2 order-md-1">
                <div class="position-relative image-wrapper-group">
                    <div class="image-card-wrapper ambient-glow interactive-lift">
                        <img alt="Artesanía" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAx04yvJcZVURAV5WCIV_5oyfwhcCE6FLIfKHqMiUJLT58nx-mvA1pq8127SrdEYxJLm-mb6UiUBOQkXJnu349p3JwfuihDrJWN4teT4fv_TuRrLT-0wysIROOPu67CwZyb7mVcOO1jQaYZf7Ef3zRaE8M2ZOde_odO2i8yQjrDQS0Wfs55SU2fodcVqcvapXqHqEsxYqmeISWeWyC3ByCt1k6y3xVdL_HBvnzg9sR6u-iVbN4LDRbX" />
                    </div>
                    <div class="blob-bg"></div>
                </div>
            </div>
            <div class="col-md-6 offset-md-1 order-1 order-md-2 d-flex flex-column justify-content-center">
                <span class="font-label-caps text-gold mb-2">El Origen</span>
                <h2 class="font-headline-md lg-text text-onyx mb-4">La historia de la exclusividad</h2>
                <p class="text-muted-custom mb-3">
                    Nacida de una profunda apreciación por la elegancia atemporal, M&amp;ZENTRO comenzó como un pequeño taller dedicado a la confección a medida. Desde nuestros primeros bocetos, la visión ha sido inquebrantable: crear prendas que no solo vistan el cuerpo, sino que eleven el espíritu.
                </p>
                <p class="text-muted-custom mb-4">
                    Cada colección es un testimonio de nuestra devoción por los materiales más finos. Viajamos por el mundo para seleccionar sedas puras, algodones orgánicos y lanas hiladas a mano, asegurando que cada pieza que lleva nuestra etiqueta cumpla con los estándares más exigentes de la moda premium.
                </p>
                <div>
                    <a class="text-decoration-none font-label-caps text-onyx d-inline-flex align-items-center" href="#" onmouseout="this.style.color='var(--color-onyx)'" onmouseover="this.style.color='var(--color-gold)'" style="transition: color 0.3s;">
                        <span class="me-2">Descubre nuestras colecciones</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Values: Bento Grid -->
    <section class="bg-surface-low w-full section-gap mt-5">
        <div class="container custom-container">
            <div class="text-center mb-5">
                <span class="font-label-caps text-gold mb-2 d-block">Nuestros Pilares</span>
                <h2 class="font-headline-md text-onyx">Los valores que nos definen</h2>
            </div>
            <div class="row g-4">
                <!-- Value 1 -->
                <div class="col-md-4">
                    <div class="value-card ambient-glow interactive-lift">
                        <div class="icon-circle">
                            <i class="fa-light fa-gem fa-2x"></i>
                        </div>
                        <h3 class="font-title-lg text-onyx mb-3">Calidad Intransigente</h3>
                        <p class="text-muted-custom mb-0">
                            Seleccionamos minuciosamente cada fibra y supervisamos cada costura, garantizando una durabilidad excepcional en cada pieza que creamos.
                        </p>
                        <div class="card-accent-line"></div>
                    </div>
                </div>
                <!-- Value 2 -->
                <div class="col-md-4">
                    <div class="value-card ambient-glow interactive-lift">
                        <div class="icon-circle">
                            <i class="fa-light fa-sparkles fa-2x"></i>
                        </div>
                        <h3 class="font-title-lg text-onyx mb-3">Elegancia Discreta</h3>
                        <p class="text-muted-custom mb-0">
                            Creemos en el poder de la sutileza. Nuestros diseños evitan la ostentación, prefiriendo hablar a través de cortes limpios y siluetas sofisticadas.
                        </p>
                        <div class="card-accent-line"></div>
                    </div>
                </div>
                <!-- Value 3 -->
                <div class="col-md-4">
                    <div class="value-card ambient-glow interactive-lift">
                        <div class="icon-circle">
                            <i class="fa-light fa-hourglass-half fa-2x"></i>
                        </div>
                        <h3 class="font-title-lg text-onyx mb-3">Tradición Moderna</h3>
                        <p class="text-muted-custom mb-0">
                            Honramos las técnicas artesanales del pasado mientras las adaptamos a las sensibilidades y el ritmo del estilo de vida contemporáneo.
                        </p>
                        <div class="card-accent-line"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection

