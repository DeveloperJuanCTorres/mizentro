@extends('layouts.app')

@section('content')

<div class="flex-grow-1 container py-section">
    <!-- Page Header -->
    <div class="text-center mb-5 mx-auto" style="max-width: 42rem;">
        <h1 class="display-lg mb-3">Estamos aquí para ti</h1>
        <p class="lead text-muted-custom">
            Ya sea para consultas sobre nuestras colecciones, asesoría de estilo personalizada o detalles de tu pedido, nuestro equipo está dedicado a brindarte una experiencia excepcional.
        </p>
    </div>
    <!-- Contact Section Layout -->
    <div class="row g-5">
        <!-- Column 1: Contact Form -->
        <div class="col-lg-7">
            <div class="bg-white rounded-4 p-4 p-md-5 ambient-shadow border border-light">
                <h2 class="headline-md mb-4">Envíanos un mensaje</h2>
                <form action="#" method="POST">
                    <div class="row g-4 mb-4">
                        <!-- Nombre -->
                        <div class="col-md-6">
                            <label class="label-caps text-muted-custom mb-2" for="name">Nombre Completo</label>
                            <input class="form-control input-elegant" id="name" name="name" placeholder="Tu nombre" required="" type="text" />
                        </div>
                        <!-- Email -->
                        <div class="col-md-6">
                            <label class="label-caps text-muted-custom mb-2" for="email">Correo Electrónico</label>
                            <input class="form-control input-elegant" id="email" name="email" placeholder="tu@email.com" required="" type="email" />
                        </div>
                    </div>
                    <!-- Asunto -->
                    <div class="mb-4 position-relative">
                        <label class="label-caps text-muted-custom mb-2" for="subject">Asunto</label>
                        <select class="form-select input-elegant pe-5" id="subject" name="subject">
                            <option disabled="" selected="" value="">Selecciona un tema</option>
                            <option value="consulta">Consulta General</option>
                            <option value="pedido">Estado de mi Pedido</option>
                            <option value="asesoria">Asesoría de Estilo</option>
                            <option value="devolucion">Cambios y Devoluciones</option>
                        </select>
                    </div>
                    <!-- Mensaje -->
                    <div class="mb-4">
                        <label class="label-caps text-muted-custom mb-2" for="message">Mensaje</label>
                        <textarea class="form-control input-elegant" id="message" name="message" placeholder="¿Cómo podemos ayudarte hoy?" required="" rows="4" style="resize: none;"></textarea>
                    </div>
                    <!-- Botón Enviar -->
                    <div class="pt-2">
                        <button class="btn btn-primary-gold label-caps d-inline-flex align-items-center justify-content-center gap-2 w-100 w-md-auto" type="submit">
                            <span>Enviar Mensaje</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Column 2: Contact Info & Map -->
        <div class="col-lg-5 d-flex flex-column gap-4">
            <!-- Info Cards -->
            <div class="rounded-4 p-4 p-md-5 contact-card-hover">
                <h3 class="title-lg mb-4">Información Directa</h3>
                <ul class="list-unstyled mb-0 d-flex flex-column gap-4">
                    <!-- WhatsApp -->
                    <li class="d-flex align-items-start gap-3">
                        <div class="icon-circle flex-shrink-0">
                            <i class="fa-brands fa-whatsapp fs-5"></i>
                        </div>
                        <div>
                            <p class="label-caps text-muted-custom mb-1">WhatsApp / Teléfono</p>
                            <a class="text-decoration-none text-dark" href="tel:+34912345678" onmouseout="this.style.color='var(--text-main)'" onmouseover="this.style.color='var(--primary-gold)'" style="transition: color 0.3s;">+34 912 345 678</a>
                        </div>
                    </li>
                    <!-- Email -->
                    <li class="d-flex align-items-start gap-3">
                        <div class="icon-circle flex-shrink-0">
                            <i class="fa-regular fa-envelope fs-5"></i>
                        </div>
                        <div>
                            <p class="label-caps text-muted-custom mb-1">Correo Electrónico</p>
                            <a class="text-decoration-none text-dark" href="mailto:hola@mzentro.com" onmouseout="this.style.color='var(--text-main)'" onmouseover="this.style.color='var(--primary-gold)'" style="transition: color 0.3s;">hola@mzentro.com</a>
                        </div>
                    </li>
                    <!-- Dirección -->
                    <li class="d-flex align-items-start gap-3">
                        <div class="icon-circle flex-shrink-0">
                            <i class="fa-solid fa-location-dot fs-5"></i>
                        </div>
                        <div>
                            <p class="label-caps text-muted-custom mb-1">Boutique Principal</p>
                            <p class="mb-0">Calle Serrano 45<br />28001 Madrid, España</p>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Stylized Map Placeholder -->
            <div class="map-container ambient-shadow">
                <img alt="Mapa de ubicación" data-alt="A stylized, minimalist map illustration of a high-end shopping district in Madrid, focusing on Calle Serrano. The map uses a sophisticated color palette of light cream, soft champagne, and subtle gold accents for streets and landmarks, maintaining a clean, premium light-mode aesthetic. A discreet, elegant gold pin marker indicates the boutique's location. The overall feel is modern, luxurious, and uncluttered." data-location="Madrid" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAfOCDZBfCBqiIpfaLL47eF_xnYGmeUIUyUvI8NcWIx3r6lyZM1fObdaXi4xjOihoueO2zdrF_S8GbS8HzyUK_zdoNiMJPN9D_4-4jGmqD1RF86FTN5AnM3g2XygRw23TvMRtsYpk1WBSE1rO5Mmbk4H54Cnxb1WHvSUHjJofVz115qX2bBJ8ZUr0sfiGJ8vqX5-2R8hITsyY3IFzP7vzsabO-bFfiDMjoFBts7FudtlyWhRBRQHpBG" />
                <div class="position-absolute bottom-0 start-0 w-100 h-50" style="background: linear-gradient(to top, rgba(26,26,26,0.4), transparent); pointer-events: none;"></div>
                <div class="position-absolute bottom-0 start-0 w-100 p-4">
                    <a class="btn btn-light rounded-pill label-caps d-inline-flex align-items-center gap-2 shadow-sm" href="#" style="background: rgba(255,255,255,0.9); backdrop-filter: blur(4px);">
                        <i class="fa-solid fa-directions text-gold"></i>
                        Obtener Direcciones
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


