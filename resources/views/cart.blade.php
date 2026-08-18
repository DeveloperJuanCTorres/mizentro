@extends('layouts.app')

@section('content')

<div class="container py-5">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb font-body-md text-secondary-custom">
            <li class="breadcrumb-item"><a class="text-decoration-none text-secondary-custom text-gold-metallic-hover" href="#">Home</a></li>
            <li aria-current="page" class="breadcrumb-item active text-dark fw-medium">Carrito</li>
        </ol>
    </nav>
    <h1 class="font-display-lg mb-5">Tu Carrito</h1>
    <div class="row g-5">
        <!-- Left Column: Cart Items -->
        <div class="col-lg-8">
            <div class="bg-surface-white rounded-3 shadow-sm border border-champagne-mist p-4">
                <!-- Item 1 -->
                <div class="d-flex flex-column flex-sm-row gap-4 pb-4 border-bottom border-champagne-mist mb-4">
                    <img alt="Blusa de Seda Esmeralda" class="product-img bg-surface-variant" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAyofp9rUB9KcJIGOx5eQPG9JkrxCGRq2x3iO7tvNNZQrexYuxDHQYtk13ZXxqSx_oB1_idgIBu-sO-CDrG5KFxLb1SfrVMNlSOFH12OwGlqCs8n9R5FRCJQUJXtDkFOtmZM51dJ25jsRDfTPRRGyRQWsIURZ7EyRMtYL7iGBlCIrNyqGGpDfp-8HjUD59rrOi1h1UVzF8OrkKY7KkfpNnRjbkPUVCH4liQS7j7yjUtMqXsxXdTGFKE" />
                    <div class="flex-grow-1 d-flex flex-column justify-content-between">
                        <div class="d-flex justify-content-between">
                            <div>
                                <span class="font-label-caps text-secondary-custom d-block mb-1">Fashion</span>
                                <h3 class="font-title-lg text-onyx-ink mb-1">Blusa de Seda Esmeralda</h3>
                                <p class="font-body-md text-secondary-custom mb-0">Color: Emerald Green | Talla: M</p>
                            </div>
                            <button aria-label="Remove item" class="btn btn-link text-secondary-custom text-danger-hover p-2">
                                <i class="fa-light fa-trash-can fs-5"></i>
                            </button>
                        </div>
                        <div class="d-flex justify-content-between align-items-end mt-3">
                            <div class="d-flex align-items-center border border-outline-variant rounded overflow-hidden">
                                <button class="quantity-btn text-onyx-ink">-</button>
                                <span class="px-3 py-1 font-body-md border-start border-end border-outline-variant">1</span>
                                <button class="quantity-btn text-onyx-ink">+</button>
                            </div>
                            <div class="text-end">
                                <span class="d-block font-body-md text-secondary-custom text-decoration-line-through">$250.00</span>
                                <span class="font-price-display text-gold-metallic">$195.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="d-flex flex-column flex-sm-row gap-4 pb-2">
                    <img alt="Collar Solitario de Oro 18k" class="product-img bg-surface-variant" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCW4pZNZNUPQZzoZOg_aSRBCYQVk-Kfo5nTnVfscr4X_cjq_-h87uNaTKbWQZYHIt7LfTRfaRY_vzMdN7lTiNHQtjceIvrk_jCRnW5dVOoUpMyajkKlA13SJa6GOljebXTqsPUNMtdMwMHg387YirF_-BNRMzHP46eCaSEkseSqbAqwTCm3unI4o4oTh3nD9ZQMcMMkJSww9oUePGUK9rkYpPINP5TxeLlYP2X9Q9Ik4L_AQbrHZa8y" />
                    <div class="flex-grow-1 d-flex flex-column justify-content-between">
                        <div class="d-flex justify-content-between">
                            <div>
                                <span class="font-label-caps text-secondary-custom d-block mb-1">Jewelry</span>
                                <h3 class="font-title-lg text-onyx-ink mb-1">Collar Solitario de Oro 18k</h3>
                                <p class="font-body-md text-secondary-custom mb-0">Material: Oro Amarillo</p>
                            </div>
                            <button aria-label="Remove item" class="btn btn-link text-secondary-custom text-danger-hover p-2">
                                <i class="fa-light fa-trash-can fs-5"></i>
                            </button>
                        </div>
                        <div class="d-flex justify-content-between align-items-end mt-3">
                            <div class="d-flex align-items-center border border-outline-variant rounded overflow-hidden">
                                <button class="quantity-btn text-onyx-ink">-</button>
                                <span class="px-3 py-1 font-body-md border-start border-end border-outline-variant">1</span>
                                <button class="quantity-btn text-onyx-ink">+</button>
                            </div>
                            <div class="text-end">
                                <span class="font-price-display text-gold-metallic">$450.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Right Column: Order Summary -->
        <div class="col-lg-4">
            <div class="bg-champagne-mist-10 rounded-3 p-4 border border-champagne-mist sticky-top" style="top: 100px;">
                <h2 class="font-headline-md mb-4 border-bottom border-outline-variant pb-3 opacity-75">Resumen del Pedido</h2>
                <div class="font-body-md text-onyx-ink mb-4 border-bottom border-outline-variant pb-4 opacity-75 d-flex flex-column gap-3">
                    <div class="d-flex justify-content-between">
                        <span>Subtotal (2 artículos)</span>
                        <span>$645.00</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span>Envío Estimado</span>
                        <span class="text-prestige-green fw-medium">Gratis</span>
                    </div>
                    <div class="d-flex justify-content-between text-secondary-custom">
                        <span>Descuentos</span>
                        <span>-$55.00</span>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-end mb-4">
                    <span class="font-title-lg text-onyx-ink">Total</span>
                    <span class="font-price-display text-gold-metallic">$645.00</span>
                </div>
                <!-- Promo Code -->
                <div class="mb-4">
                    <label class="form-label font-label-caps text-secondary-custom mb-2" for="promo">Código de Promoción</label>
                    <div class="input-group">
                        <input class="form-control border-outline-variant font-body-md" id="promo" placeholder="Ingresa código" type="text" />
                        <button class="btn bg-surface-container border-outline-variant text-onyx-ink font-body-md px-3" type="button">Aplicar</button>
                    </div>
                </div>
                <!-- CTA -->
                <a href="{{route('checkout')}}" class="btn bg-gold-metallic w-100 py-3 font-title-lg rounded-3 mb-4 d-flex justify-content-center align-items-center gap-2 shadow-sm text-white">
                    Proceder al Checkout <i class="fa-light fa-arrow-right"></i>
                </a>
                <!-- Trust Badges -->
                <!-- <div class="d-flex justify-content-center gap-4 text-secondary-custom mt-2">
                    <div class="text-center">
                        <i class="fa-light fa-shield-check fs-5 mb-1"></i>
                        <div style="font-size: 12px;">Compra Segura</div>
                    </div>
                    <div class="text-center">
                        <i class="fa-light fa-truck-fast fs-5 mb-1"></i>
                        <div style="font-size: 12px;">Envío Rápido</div>
                    </div>
                    <div class="text-center">
                        <i class="fa-light fa-arrow-rotate-left fs-5 mb-1"></i>
                        <div style="font-size: 12px;">Devoluciones</div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Related Products -->
    <section class="mt-5 pt-5">
        <h2 class="font-headline-md text-center mb-5">Productos que te podrían gustar</h2>
        <div class="row g-4">
            <!-- Product 1 -->
            <div class="col-sm-6 col-lg-3">
                <div class="product-card">
                    <div class="position-relative overflow-hidden bg-surface-variant">
                        <img alt="Bolso de Cuero Tan" class="card-img-custom" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAhR5XfoAcpMnWN_nmyXAbgnvWe4asvO0R2aYOU6ncPyfEZJXbwB-ItdFxXUfLOJXc-Znh0w89jNvtkbe5F1pRg3jUZXNDxMAV64hmCkxPugarPP5OI79QbDEslqPz0ovn7ar4G7Rb8NKssSPWM0doghrifddpQ3_tKCnnFibDp0vJYmFk1G5m6zraddWiM5VJzdp6ib1OpF7__yrcqV1SuEW1poH3qtTTOxIsqDxeDtPJSu0zsAZjS" />
                        <button class="fav-btn shadow-sm">
                            <i class="fa-light fa-heart"></i>
                        </button>
                    </div>
                    <div class="p-3 text-center">
                        <h3 class="font-title-lg text-onyx-ink mb-1 text-truncate">Bolso de Cuero Tan</h3>
                        <p class="font-price-display text-gold-metallic mb-0">$320.00</p>
                    </div>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="col-sm-6 col-lg-3">
                <div class="product-card">
                    <div class="position-relative overflow-hidden bg-surface-variant">
                        <img alt="Eau de Parfum Signature" class="card-img-custom" src="https://lh3.googleusercontent.com/aida-public/AB6AXuADTPViUvnG7QQQF54wgQ1FG_6O28JZhF9QAlSuLn7upGcAllneybU1mvLu5N7PAC6FNnP_NgwGY4CAdpwCjtu5cUEkpJkiAc4-VkxJPp9ZM8qGTfokT1xuHZ0gMoNQ2j4rBtaXCQAs_A8ZK9A3H0HEUKRnP6x2AGHa-TbfU_-QAuqHLx5f0MGHcr_Pnex8FgYtzzqR_vk5tDLtXboJoRBKmA88M7NqNnVE_oSwfJ1jtXTN2MMheO3K" />
                        <button class="fav-btn shadow-sm">
                            <i class="fa-light fa-heart"></i>
                        </button>
                    </div>
                    <div class="p-3 text-center">
                        <h3 class="font-title-lg text-onyx-ink mb-1 text-truncate">Eau de Parfum Signature</h3>
                        <p class="font-price-display text-gold-metallic mb-0">$185.00</p>
                    </div>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="col-sm-6 col-lg-3">
                <div class="product-card">
                    <div class="position-relative overflow-hidden bg-surface-variant">
                        <img alt="Abrigo de Lana Crema" class="card-img-custom" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBJ3BIR7H2gnZQP0PvzDgeWtkSKKEMfXAiPMmt4LhwnkUaT2-yIVUp9c40tHnGMhwkYzintS1F-B3ok3wwSob2vUA5Yi4IOya5gQVc_x8o_cJSbfQCzUQUZnLXkl6l0_by4j06WaUA3HgLMciv584vLX2sollSEn7ptjihX7rtgZ7D-CcJVvmOMuFP2cnLDcZFWRCtD9sAZR4ejOe9maB5idywqfhEYrVX_Rw0YfOrXdd1ClxH0r0aw" />
                        <button class="fav-btn shadow-sm">
                            <i class="fa-light fa-heart"></i>
                        </button>
                    </div>
                    <div class="p-3 text-center">
                        <h3 class="font-title-lg text-onyx-ink mb-1 text-truncate">Abrigo de Lana Crema</h3>
                        <p class="font-price-display text-gold-metallic mb-0">$450.00</p>
                    </div>
                </div>
            </div>
            <!-- Product 4 -->
            <div class="col-sm-6 col-lg-3">
                <div class="product-card">
                    <div class="position-relative overflow-hidden bg-surface-variant">
                        <img alt="Aros Clásicos Oro" class="card-img-custom" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAWOrpBDBcjYli_-bPVtOQESXS0RfgIURq85xOnvgdIivXV2jnuQwfeguJFr-UYyN7x7lxT1MqC4fbo-GXspRq_q06ZhOLdsF2DxQbPEPbkSde6oEME0Tm1-vCICacfh8T_gQ5Kn40_1d_dbIReFDJdagXAoYRx0V_DEuUbidNjALBPxCPnYbsXSxA5Aynsi4VqpHjLp5KpQLkPi7g6nUFMVmxS5caKFA8IAiyNJM2rboWpDFVZe-2n" />
                        <button class="fav-btn shadow-sm">
                            <i class="fa-light fa-heart"></i>
                        </button>
                    </div>
                    <div class="p-3 text-center">
                        <h3 class="font-title-lg text-onyx-ink mb-1 text-truncate">Aros Clásicos Oro</h3>
                        <p class="font-price-display text-gold-metallic mb-0">$120.00</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection


