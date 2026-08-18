@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="row g-5">
        <!-- Left Column: Checkout Forms -->
        <div class="col-lg-7 d-flex flex-column gap-5">
            <!-- Step 1: Customer Info -->
            <section class="bg-white rounded-3 ambient-shadow border p-4 p-md-5" style="border-color: var(--surface-container-highest) !important;">
                <h2 class="section-title text-onyx-ink d-flex align-items-center gap-3">
                    <i class="fa-regular fa-user text-gold-metallic"></i>
                    Información del cliente
                </h2>
                <div class="row g-4">
                    <div class="col-12">
                        <label class="form-label">Email</label>
                        <input class="form-control" placeholder="you@example.com" type="email" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Nombres</label>
                        <input class="form-control" type="text" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Apellidos</label>
                        <input class="form-control" type="text" />
                    </div>
                    <div class="col-12">
                        <label class="form-label">Número de teléfono</label>
                        <input class="form-control" type="tel" />
                    </div>
                </div>
            </section>
            <!-- Step 2: Shipping Address -->
            <section class="bg-white rounded-3 ambient-shadow border p-4 p-md-5" style="border-color: var(--surface-container-highest) !important;">
                <h2 class="section-title text-onyx-ink d-flex align-items-center gap-3">
                    <i class="fa-solid fa-truck-fast text-gold-metallic"></i>
                    Dirección de Envío
                </h2>
                <div class="row g-4">
                    <div class="col-12">
                        <label class="form-label">Dirección</label>
                        <input class="form-control" placeholder="123 Luxury Ave, Apt 4B" type="text" />
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Departamento</label>
                        <select class="form-select">
                            <option>Select Dept</option>
                            <option>Lima</option>
                            <option>Cusco</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Provincia</label>
                        <select class="form-select">
                            <option>Select Prov</option>
                            <option>Lima</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Distrito</label>
                        <select class="form-select">
                            <option>Select Dist</option>
                            <option>Miraflores</option>
                            <option>San Isidro</option>
                        </select>
                    </div>
                </div>
            </section>
            <!-- Step 3: Shipping Method -->
            <section class="bg-white rounded-3 ambient-shadow border p-4 p-md-5" style="border-color: var(--surface-container-highest) !important;">
                <h2 class="section-title text-onyx-ink d-flex align-items-center gap-3">
                    <i class="fa-solid fa-box text-gold-metallic"></i>
                    Método de Envío
                </h2>
                <div class="d-flex flex-column gap-3">
                    <label class="custom-radio-container bg-champagne-mist-10 d-flex justify-content-between align-items-center" style="border-color: var(--gold-metallic);">
                        <div class="d-flex align-items-center gap-3">
                            <input checked="" class="form-check-input mt-0" name="shipping" type="radio" />
                            <div>
                                <span class="d-block title-lg text-onyx-ink">Envío Estándar</span>
                                <span class="d-block text-on-surface-variant">3-5 Días Laborales</span>
                            </div>
                        </div>
                        <span class="price-display text-onyx-ink">Free</span>
                    </label>
                    <label class="custom-radio-container d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center gap-3">
                            <input class="form-check-input mt-0" name="shipping" type="radio" />
                            <div>
                                <span class="d-block title-lg text-onyx-ink">Envío Express</span>
                                <span class="d-block text-on-surface-variant">1-2 Días Laborales</span>
                            </div>
                        </div>
                        <span class="price-display text-onyx-ink">$15.00</span>
                    </label>
                    <label class="custom-radio-container d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center gap-3">
                            <input class="form-check-input mt-0" name="shipping" type="radio" />
                            <div>
                                <span class="d-block title-lg text-onyx-ink">Store Pickup</span>
                                <span class="d-block text-on-surface-variant">M&amp;ZENTRO Flagship Store</span>
                            </div>
                        </div>
                        <span class="price-display text-onyx-ink">Free</span>
                    </label>
                </div>
            </section>
            <!-- Step 4: Payment Method -->
            <section class="bg-white rounded-3 ambient-shadow border p-4 p-md-5" style="border-color: var(--surface-container-highest) !important;">
                <h2 class="section-title text-onyx-ink d-flex align-items-center gap-3">
                    <i class="fa-regular fa-credit-card text-gold-metallic"></i>
                    Payment Method
                </h2>
                <div class="d-flex flex-column gap-3">
                    <div class="border rounded-3 overflow-hidden" style="border-color: var(--gold-metallic) !important;">
                        <label class="d-flex align-items-center gap-3 p-3 bg-champagne-mist-10 cursor-pointer m-0">
                            <input checked="" class="form-check-input mt-0" name="payment" type="radio" />
                            <span class="title-lg text-onyx-ink">Credit Card</span>
                        </label>
                        <div class="p-4 pt-3 border-top bg-white d-flex flex-column gap-3" style="border-color: rgba(212,175,55,0.2) !important;">
                            <div>
                                <label class="form-label">Card Number</label>
                                <input class="form-control" placeholder="0000 0000 0000 0000" type="text" />
                            </div>
                            <div class="row g-3">
                                <div class="col-6">
                                    <label class="form-label">Expiry Date</label>
                                    <input class="form-control" placeholder="MM/YY" type="text" />
                                </div>
                                <div class="col-6">
                                    <label class="form-label">CVV</label>
                                    <input class="form-control" placeholder="123" type="text" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <label class="custom-radio-container d-flex align-items-center gap-3 m-0">
                        <input class="form-check-input mt-0" name="payment" type="radio" />
                        <span class="title-lg text-onyx-ink">Yape / Plin</span>
                    </label>
                    <label class="custom-radio-container d-flex align-items-center gap-3 m-0">
                        <input class="form-check-input mt-0" name="payment" type="radio" />
                        <span class="title-lg text-onyx-ink">Bank Transfer</span>
                    </label>
                </div>
            </section>
        </div>
        <!-- Right Column: Order Summary & Trust -->
        <div class="col-lg-5">
            <div class="sticky-top" style="top: 8rem;">
                <!-- Order Summary Box -->
                <div class="bg-champagne-mist-20 rounded-3 p-4 p-md-5 border ambient-shadow mb-4" style="border-color: var(--champagne-mist) !important;">
                    <h3 class="section-title text-onyx-ink mb-4">Resumen del pedido</h3>
                    <!-- Items -->
                    <div class="d-flex flex-column gap-4 border-bottom pb-4 mb-4" style="border-color: rgba(26,26,26,0.1) !important;">
                        <div class="d-flex gap-3 align-items-center">
                            <img alt="Aura Gold Necklace" class="product-img bg-white flex-shrink-0" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDBVdWfqos7uzAaq4bvo471SzjEcp0Um1myWlX2O0GMojshLXSMsJWVo6UHv2nnmJjZJZMmg2MTHrAxwDzADvPSHLxbB0BZ9OzRdxHmvbJ17CJtULFRtYiJYHfkWeoui8l7hv4FAHEVy35elM7qitYaKl6ibMoMgcgqrwgauhpwKuMqdScU_Zzws11qsoQ65C0RjzM_-LsKThpi48XXNwm_n30FNavl9f8V1lKeJa-apJmKDDsQN24A" />
                            <div class="flex-grow-1">
                                <h4 class="title-lg text-onyx-ink mb-1">Aura Gold Necklace</h4>
                                <p class="mb-0 text-on-surface-variant">Qty: 1</p>
                            </div>
                            <span class="price-display text-onyx-ink">$250</span>
                        </div>
                        <div class="d-flex gap-3 align-items-center">
                            <img alt="Noir Structured Bag" class="product-img bg-white flex-shrink-0" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCZqof55jLaKxzfgYOWm81WTBK8ZOlyTBqxtSI_lJlmCNdEsHdBLJpZkg29Jtj8IXGM4_N54x0H0Uu6lKKyYSvL5WEnkpbYeGwlIOrZnCx259DhIll-F2-QobnsR9OEsEF24NOdopNxb7J2zpIuF_ZEhNGI8iRv5l4e1ZBP4_qRpfLwCYk1dU2QViT8fuuv3fuSDZWL-v7-Wl1xCMG-NftnZn7CxW5oNKmXMm82RrcO2f3wxtN-wdl7" />
                            <div class="flex-grow-1">
                                <h4 class="title-lg text-onyx-ink mb-1">Noir Structured Bag</h4>
                                <p class="mb-0 text-on-surface-variant">Qty: 1</p>
                            </div>
                            <span class="price-display text-onyx-ink">$480</span>
                        </div>
                    </div>
                    <!-- Totals -->
                    <div class="d-flex flex-column gap-3 mb-4">
                        <div class="d-flex justify-content-between fs-5 text-on-surface-variant">
                            <span>Subtotal</span>
                            <span>$730.00</span>
                        </div>
                        <div class="d-flex justify-content-between fs-5 text-on-surface-variant">
                            <span>Envío</span>
                            <span>Gratis</span>
                        </div>
                        <div class="d-flex justify-content-between price-display text-onyx-ink pt-3 border-top" style="border-color: rgba(26,26,26,0.1) !important;">
                            <span>Total</span>
                            <span>$730.00</span>
                        </div>
                    </div>
                    <!-- CTA -->
                    <button class="btn btn-gold w-100 rounded-3 d-flex align-items-center justify-content-center gap-2">
                        Confirmar pedido
                        <i class="fa-solid fa-lock"></i>
                    </button>
                </div>
                <!-- Trust Elements -->
                <div class="row g-3 text-center">
                    <div class="col-4">
                        <div class="p-3 bg-white rounded-3 border h-100" style="border-color: var(--surface-container-highest) !important;">
                            <i class="fa-solid fa-shield-halved text-prestige-green fs-3 mb-2 d-block"></i>
                            <p class="form-label m-0 text-onyx-ink">Secure Purchase</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="p-3 bg-white rounded-3 border h-100" style="border-color: var(--surface-container-highest) !important;">
                            <i class="fa-solid fa-lock text-gold-metallic fs-3 mb-2 d-block"></i>
                            <p class="form-label m-0 text-onyx-ink">SSL Encrypted</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="p-3 bg-white rounded-3 border h-100" style="border-color: var(--surface-container-highest) !important;">
                            <i class="fa-solid fa-rotate text-gold-metallic fs-3 mb-2 d-block"></i>
                            <p class="form-label m-0 text-onyx-ink">Changes Guaranteed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<style>
    :root {
        --bs-body-font-family: 'Montserrat', sans-serif;
        --bs-body-bg: #FFFFFF;
        --bs-body-color: #1c1b1b;

        --champagne-mist: #F3E9D2;
        --gold-metallic: #D4AF37;
        --onyx-ink: #1A1A1A;
        --surface-container-highest: #e5e2e1;
        --surface-container-lowest: #ffffff;
        --on-surface-variant: #4d4635;
        --prestige-green: #006414;
        --surface-container: #f0eded;
    }

    body {
        font-family: var(--bs-body-font-family);
        background-color: var(--bs-body-bg);
        color: var(--bs-body-color);
        -webkit-font-smoothing: antialiased;
    }

    .text-gold-metallic {
        color: var(--gold-metallic) !important;
    }

    .text-onyx-ink {
        color: var(--onyx-ink) !important;
    }

    .text-prestige-green {
        color: var(--prestige-green) !important;
    }

    .text-on-surface-variant {
        color: var(--on-surface-variant) !important;
    }

    .bg-champagne-mist-20 {
        background-color: rgba(243, 233, 210, 0.2) !important;
    }

    .bg-champagne-mist-10 {
        background-color: rgba(243, 233, 210, 0.1) !important;
    }

    .ambient-shadow {
        box-shadow: 0 10px 30px -10px rgba(212, 175, 55, 0.08);
    }

    .form-control,
    .form-select {
        background-color: var(--surface-container-lowest);
        border-color: rgba(26, 26, 26, 0.2);
        padding: 0.75rem 1rem;
        transition: all 0.3s ease;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: var(--gold-metallic);
        box-shadow: 0 0 0 2px rgba(212, 175, 55, 0.2);
    }

    .form-label {
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.15em;
        text-transform: uppercase;
        color: var(--on-surface-variant);
        margin-bottom: 0.5rem;
    }

    .btn-gold {
        background-color: var(--gold-metallic);
        color: #fff;
        font-weight: 600;
        font-size: 20px;
        letter-spacing: 0.05em;
        padding: 1rem 2rem;
        border: none;
        transition: all 0.3s;
        box-shadow: 0 4px 15px rgba(212, 175, 55, 0.2);
    }

    .btn-gold:hover {
        background-color: #b0902c;
        color: #fff;
        transform: translateY(-2px);
    }

    .custom-radio-container {
        border: 1px solid rgba(26, 26, 26, 0.1);
        border-radius: 0.5rem;
        padding: 1rem;
        cursor: pointer;
        transition: border-color 0.3s;
    }

    .custom-radio-container:hover {
        border-color: rgba(212, 175, 55, 0.5);
    }

    .custom-radio-container.active {
        border-color: var(--gold-metallic);
        background-color: var(--bg-champagne-mist-10);
    }

    .form-check-input:checked {
        background-color: var(--gold-metallic);
        border-color: var(--gold-metallic);
    }

    .header-logo {
        font-size: 48px;
        font-weight: 600;
        letter-spacing: -0.02em;
        text-decoration: none;
    }

    .section-title {
        font-size: 32px;
        font-weight: 500;
        margin-bottom: 1.5rem;
    }

    .title-lg {
        font-size: 20px;
        font-weight: 600;
        letter-spacing: 0.05em;
    }

    .price-display {
        font-size: 24px;
        font-weight: 500;
    }

    .product-img {
        width: 80px;
        height: 96px;
        object-fit: cover;
        border-radius: 0.5rem;
    }

    @media (max-width: 768px) {
        .section-title {
            font-size: 24px;
        }

        .header-logo {
            font-size: 36px;
        }
    }
</style>

