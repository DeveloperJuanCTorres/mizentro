@extends('layouts.app')

@section('content')

<div class="flex-grow-1 w-100 container max-w-container px-3 px-md-4 py-5">
    <!-- Breadcrumbs -->
    <nav aria-label="breadcrumb" class="mb-5 text-secondary-custom small">
        <ol class="breadcrumb m-0 align-items-center">
            <li class="breadcrumb-item"><a class="text-decoration-none text-secondary-custom text-hover-primary" href="#">Home</a></li>
            <li class="breadcrumb-item"><a class="text-decoration-none text-secondary-custom text-hover-primary" href="#">Shop</a></li>
            <li aria-current="page" class="breadcrumb-item active text-primary-custom fw-medium">Beauty</li>
        </ol>
    </nav>
    <div class="row g-4">
        <!-- Sidebar / Filters -->
        <aside class="col-12 col-md-3 col-lg-3 flex-shrink-0">
            <div class="bg-surface-white rounded-3 p-4 ambient-glow sticky-top" style="top: 100px;">
                <h2 class="fs-5 text-primary-custom mb-4 border-bottom border-champagne-mist pb-2 fw-semibold">Filters</h2>
                <!-- Categories -->
                <div class="mb-4">
                    <h3 class="fs-6 text-secondary-custom mb-3 text-uppercase fw-bold" style="letter-spacing: 0.15em;">Categories</h3>
                    <div class="d-flex flex-column gap-2">
                        <div class="form-check">
                            <input class="form-check-input" id="cat-skincare" type="checkbox" />
                            <label class="form-check-label small" for="cat-skincare">Skincare (24)</label>
                        </div>
                        <div class="form-check">
                            <input checked="" class="form-check-input" id="cat-makeup" type="checkbox" />
                            <label class="form-check-label small fw-medium text-primary-custom" for="cat-makeup">Makeup (48)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="cat-fragrance" type="checkbox" />
                            <label class="form-check-label small" for="cat-fragrance">Fragrance (12)</label>
                        </div>
                    </div>
                </div>
                <!-- Price Range -->
                <div class="mb-4">
                    <h3 class="fs-6 text-secondary-custom mb-3 text-uppercase fw-bold" style="letter-spacing: 0.15em;">Price Range</h3>
                    <input class="form-range" id="priceRange" max="1000" min="0" type="range" />
                    <div class="d-flex justify-content-between mt-2 small text-secondary-custom">
                        <span>$0</span>
                        <span>$1000+</span>
                    </div>
                </div>
                <!-- Brand -->
                <div class="mb-4">
                    <h3 class="fs-6 text-secondary-custom mb-3 text-uppercase fw-bold" style="letter-spacing: 0.15em;">Brand</h3>
                    <div class="d-flex flex-column gap-2">
                        <div class="form-check">
                            <input class="form-check-input" id="brand-lumiere" type="checkbox" />
                            <label class="form-check-label small" for="brand-lumiere">Lumière</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="brand-aura" type="checkbox" />
                            <label class="form-check-label small" for="brand-aura">Aura</label>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Product Canvas -->
        <div class="col-12 col-md-9 col-lg-9 flex-grow-1">
            <!-- Top Toolbar -->
            <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom border-champagne-mist flex-wrap gap-3">
                <h1 class="fs-3 fw-medium text-primary-custom m-0">Beauty Collection</h1>
                <div class="d-flex align-items-center gap-3">
                    <span class="small text-secondary-custom d-none d-sm-inline">Showing 1-12 of 48 results</span>
                    <select class="form-select form-select-sm w-auto bg-surface-white border-outline-variant rounded-2 py-2 ps-3 pe-5">
                        <option>Default Sorting</option>
                        <option>Newest Arrivals</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                        <option>Best Rated</option>
                    </select>
                </div>
            </div>
            <!-- Product Grid -->
            <div class="row row-cols-2 row-cols-lg-4 g-3 g-md-4">
                <!-- Product Card 1 -->
                <div class="col">
                    <div class="card h-100 border-0 bg-surface-white rounded-4 overflow-hidden ambient-glow hover-lift product-card">
                        <a href="{{route('product.detail')}}" class="product-image-container">
                            <div class="product-image" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCiZRNRE8Xi937JN6RR5ejRkFwa3qnexWpJICDzg21LXjPLqMYSq0jhDz2NitinmjrNEp0phbTOPv8uzfCn99xACOhTStF-xtaAMhEkoMjquosFvxoz1jhqVZkGsSSxHcBibjElAyAyYOcuyoL0iqdRuWIrMzYq3duCwOL_pi-XACjAT9HyXzQPxPfHNlsm-kHWU2gN87iIv12sdTHG2kiM5qcdX_DhijFh8K0344oFy0kwJCqHEEv3')"></div>
                            <button class="btn btn-light rounded-circle position-absolute top-0 end-0 m-2 p-2 lh-1 text-secondary-custom shadow-sm bg-white bg-opacity-75" style="backdrop-filter: blur(4px);">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                            <div class="position-absolute bottom-0 start-0 w-100 p-3 quick-add-btn">
                                <button class="btn w-100 bg-primary-container text-white fw-bold text-uppercase py-2 rounded-3" style="letter-spacing: 0.15em; font-size: 0.75rem;">Agregar</button>
                            </div>
                        </a>
                        <div class="card-body p-3 text-center d-flex flex-column justify-content-between">
                            <div>
                                <h3 class="card-title fs-6 text-primary-custom mb-1 line-clamp-1 fw-semibold">L'Or Essence Parfum</h3>
                                <p class="card-text small text-secondary-custom mb-2">Lumière</p>
                            </div>
                            <p class="fs-5 text-primary-custom fw-medium mt-2 mb-0">$185.00</p>
                        </div>
                    </div>
                </div>
                <!-- Product Card 2 -->
                <div class="col">
                    <div class="card h-100 border-0 bg-surface-white rounded-4 overflow-hidden ambient-glow hover-lift product-card">
                        <a href="{{route('product.detail')}}" class="product-image-container">
                            <div class="product-image" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCFaVkmYjmrB2bg65AcB99y24hh1TnUeOuSVhsKt7Cn5Z_S8eE6BwBYAQfqRbi4tSjqV-hTeSwar0w2HTh12iotHYa170msnig941VGVK-6orpd2jYXoMWeP8vzmY9A8mBdsH-_bbfydBY3nAcu6fBkRDW35wShe9BbVgLz826j10CX8jlqFzcjnP68tyvmXcHt4i2jcYK7Dtwi_MAcHh6yUuAfT-R1nJ8we1hNeD7n1SClcxO9Buyc')"></div>
                            <button class="btn btn-light rounded-circle position-absolute top-0 end-0 m-2 p-2 lh-1 text-secondary-custom shadow-sm bg-white bg-opacity-75" style="backdrop-filter: blur(4px);">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                            <div class="position-absolute bottom-0 start-0 w-100 p-3 quick-add-btn">
                                <button class="btn w-100 bg-primary-container text-white fw-bold text-uppercase py-2 rounded-3" style="letter-spacing: 0.15em; font-size: 0.75rem;">Agregar</button>
                            </div>
                        </a>
                        <div class="card-body p-3 text-center d-flex flex-column justify-content-between">
                            <div>
                                <h3 class="card-title fs-6 text-primary-custom mb-1 line-clamp-1 fw-semibold">Flawless Silk Foundation</h3>
                                <p class="card-text small text-secondary-custom mb-2">Aura</p>
                            </div>
                            <p class="fs-5 text-primary-custom fw-medium mt-2 mb-0">$65.00</p>
                        </div>
                    </div>
                </div>
                <!-- Product Card 3 -->
                <div class="col">
                    <div class="card h-100 border-0 bg-surface-white rounded-4 overflow-hidden ambient-glow hover-lift product-card">
                        <a href="{{route('product.detail')}}" class="product-image-container">
                            <div class="product-image" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD7bPy4M2RhIuYrnXtKGjSuUVT1HvsSbUFHOFpsIE5hMpMWUFXop7DMyK9h7g5V4_82Kj4r_0eszUCy80U3Fp-OBsJ6TKknN2b6w9jKUvAHNoQRghphd_1GVgcVvAtgn43VQPolePo5m141fGY0ac8yiKbrtXBJjEVCv3a6oE7m1iqrSVv9sCWDqfu3Uu9wBAVusnnuAxfNVEvOwcH9zArCtbly87xCAVpK6o1djbvr3NJi-iiirKcP')"></div>
                            <div class="position-absolute top-0 start-0 m-2 bg-champagne-mist text-primary-custom px-2 py-1 rounded-1 fw-bold" style="font-size: 0.65rem;">NEW</div>
                            <button class="btn btn-light rounded-circle position-absolute top-0 end-0 m-2 p-2 lh-1 text-secondary-custom shadow-sm bg-white bg-opacity-75" style="backdrop-filter: blur(4px);">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                            <div class="position-absolute bottom-0 start-0 w-100 p-3 quick-add-btn">
                                <button class="btn w-100 bg-primary-container text-white fw-bold text-uppercase py-2 rounded-3" style="letter-spacing: 0.15em; font-size: 0.75rem;">Agregar</button>
                            </div>
                        </a>
                        <div class="card-body p-3 text-center d-flex flex-column justify-content-between">
                            <div>
                                <h3 class="card-title fs-6 text-primary-custom mb-1 line-clamp-1 fw-semibold">Nude Symphony Palette</h3>
                                <p class="card-text small text-secondary-custom mb-2">Lumière</p>
                            </div>
                            <p class="fs-5 text-primary-custom fw-medium mt-2 mb-0">$78.00</p>
                        </div>
                    </div>
                </div>
                <!-- Product Card 4 -->
                <div class="col">
                    <div class="card h-100 border-0 bg-surface-white rounded-4 overflow-hidden ambient-glow hover-lift product-card">
                        <div class="product-image-container">
                            <div class="product-image" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBstVulAAe_obztOdGdrP5wnPyagSIajM5tZ2hSrjddaLkZLP8pMNJSIXe5_nT9UHMIeFPUs5blDfV8dAt8iLqFCQMfv-bVjYHRtZ66gwXVc6wZEC3raZ6IvfFYAUcqdbE64UHxLy7gmOODnYlMFS2D6TxPTP8mxTXingIope4NUJ3F2HhBktFvIfZJXQykFZbIHCA__XwWISueT0Zxm7C5MgAsoAj41qmn1FvB8uDy7pit8Z1RSPti')"></div>
                            <button class="btn btn-light rounded-circle position-absolute top-0 end-0 m-2 p-2 lh-1 text-secondary-custom shadow-sm bg-white bg-opacity-75" style="backdrop-filter: blur(4px);">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                            <div class="position-absolute bottom-0 start-0 w-100 p-3 quick-add-btn">
                                <button class="btn w-100 bg-primary-container text-white fw-bold text-uppercase py-2 rounded-3" style="letter-spacing: 0.15em; font-size: 0.75rem;">QUICK ADD</button>
                            </div>
                        </div>
                        <div class="card-body p-3 text-center d-flex flex-column justify-content-between">
                            <div>
                                <h3 class="card-title fs-6 text-primary-custom mb-1 line-clamp-1 fw-semibold">Velvet Rouge Lip Color</h3>
                                <p class="card-text small text-secondary-custom mb-2">Aura</p>
                            </div>
                            <p class="fs-5 text-primary-custom fw-medium mt-2 mb-0">$42.00</p>
                        </div>
                    </div>
                </div>

                <!-- Product Card 1 -->
                <div class="col">
                    <div class="card h-100 border-0 bg-surface-white rounded-4 overflow-hidden ambient-glow hover-lift product-card">
                        <a href="{{route('product.detail')}}" class="product-image-container">
                            <div class="product-image" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCiZRNRE8Xi937JN6RR5ejRkFwa3qnexWpJICDzg21LXjPLqMYSq0jhDz2NitinmjrNEp0phbTOPv8uzfCn99xACOhTStF-xtaAMhEkoMjquosFvxoz1jhqVZkGsSSxHcBibjElAyAyYOcuyoL0iqdRuWIrMzYq3duCwOL_pi-XACjAT9HyXzQPxPfHNlsm-kHWU2gN87iIv12sdTHG2kiM5qcdX_DhijFh8K0344oFy0kwJCqHEEv3')"></div>
                            <button class="btn btn-light rounded-circle position-absolute top-0 end-0 m-2 p-2 lh-1 text-secondary-custom shadow-sm bg-white bg-opacity-75" style="backdrop-filter: blur(4px);">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                            <div class="position-absolute bottom-0 start-0 w-100 p-3 quick-add-btn">
                                <button class="btn w-100 bg-primary-container text-white fw-bold text-uppercase py-2 rounded-3" style="letter-spacing: 0.15em; font-size: 0.75rem;">Agregar</button>
                            </div>
                        </a>
                        <div class="card-body p-3 text-center d-flex flex-column justify-content-between">
                            <div>
                                <h3 class="card-title fs-6 text-primary-custom mb-1 line-clamp-1 fw-semibold">L'Or Essence Parfum</h3>
                                <p class="card-text small text-secondary-custom mb-2">Lumière</p>
                            </div>
                            <p class="fs-5 text-primary-custom fw-medium mt-2 mb-0">$185.00</p>
                        </div>
                    </div>
                </div>
                <!-- Product Card 2 -->
                <div class="col">
                    <div class="card h-100 border-0 bg-surface-white rounded-4 overflow-hidden ambient-glow hover-lift product-card">
                        <a href="{{route('product.detail')}}" class="product-image-container">
                            <div class="product-image" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCFaVkmYjmrB2bg65AcB99y24hh1TnUeOuSVhsKt7Cn5Z_S8eE6BwBYAQfqRbi4tSjqV-hTeSwar0w2HTh12iotHYa170msnig941VGVK-6orpd2jYXoMWeP8vzmY9A8mBdsH-_bbfydBY3nAcu6fBkRDW35wShe9BbVgLz826j10CX8jlqFzcjnP68tyvmXcHt4i2jcYK7Dtwi_MAcHh6yUuAfT-R1nJ8we1hNeD7n1SClcxO9Buyc')"></div>
                            <button class="btn btn-light rounded-circle position-absolute top-0 end-0 m-2 p-2 lh-1 text-secondary-custom shadow-sm bg-white bg-opacity-75" style="backdrop-filter: blur(4px);">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                            <div class="position-absolute bottom-0 start-0 w-100 p-3 quick-add-btn">
                                <button class="btn w-100 bg-primary-container text-white fw-bold text-uppercase py-2 rounded-3" style="letter-spacing: 0.15em; font-size: 0.75rem;">Agregar</button>
                            </div>
                        </a>
                        <div class="card-body p-3 text-center d-flex flex-column justify-content-between">
                            <div>
                                <h3 class="card-title fs-6 text-primary-custom mb-1 line-clamp-1 fw-semibold">Flawless Silk Foundation</h3>
                                <p class="card-text small text-secondary-custom mb-2">Aura</p>
                            </div>
                            <p class="fs-5 text-primary-custom fw-medium mt-2 mb-0">$65.00</p>
                        </div>
                    </div>
                </div>
                <!-- Product Card 3 -->
                <div class="col">
                    <div class="card h-100 border-0 bg-surface-white rounded-4 overflow-hidden ambient-glow hover-lift product-card">
                        <a href="{{route('product.detail')}}" class="product-image-container">
                            <div class="product-image" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD7bPy4M2RhIuYrnXtKGjSuUVT1HvsSbUFHOFpsIE5hMpMWUFXop7DMyK9h7g5V4_82Kj4r_0eszUCy80U3Fp-OBsJ6TKknN2b6w9jKUvAHNoQRghphd_1GVgcVvAtgn43VQPolePo5m141fGY0ac8yiKbrtXBJjEVCv3a6oE7m1iqrSVv9sCWDqfu3Uu9wBAVusnnuAxfNVEvOwcH9zArCtbly87xCAVpK6o1djbvr3NJi-iiirKcP')"></div>
                            <div class="position-absolute top-0 start-0 m-2 bg-champagne-mist text-primary-custom px-2 py-1 rounded-1 fw-bold" style="font-size: 0.65rem;">NEW</div>
                            <button class="btn btn-light rounded-circle position-absolute top-0 end-0 m-2 p-2 lh-1 text-secondary-custom shadow-sm bg-white bg-opacity-75" style="backdrop-filter: blur(4px);">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                            <div class="position-absolute bottom-0 start-0 w-100 p-3 quick-add-btn">
                                <button class="btn w-100 bg-primary-container text-white fw-bold text-uppercase py-2 rounded-3" style="letter-spacing: 0.15em; font-size: 0.75rem;">Agregar</button>
                            </div>
                        </a>
                        <div class="card-body p-3 text-center d-flex flex-column justify-content-between">
                            <div>
                                <h3 class="card-title fs-6 text-primary-custom mb-1 line-clamp-1 fw-semibold">Nude Symphony Palette</h3>
                                <p class="card-text small text-secondary-custom mb-2">Lumière</p>
                            </div>
                            <p class="fs-5 text-primary-custom fw-medium mt-2 mb-0">$78.00</p>
                        </div>
                    </div>
                </div>
                <!-- Product Card 4 -->
                <div class="col">
                    <div class="card h-100 border-0 bg-surface-white rounded-4 overflow-hidden ambient-glow hover-lift product-card">
                        <a href="{{route('product.detail')}}" class="product-image-container">
                            <div class="product-image" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBstVulAAe_obztOdGdrP5wnPyagSIajM5tZ2hSrjddaLkZLP8pMNJSIXe5_nT9UHMIeFPUs5blDfV8dAt8iLqFCQMfv-bVjYHRtZ66gwXVc6wZEC3raZ6IvfFYAUcqdbE64UHxLy7gmOODnYlMFS2D6TxPTP8mxTXingIope4NUJ3F2HhBktFvIfZJXQykFZbIHCA__XwWISueT0Zxm7C5MgAsoAj41qmn1FvB8uDy7pit8Z1RSPti')"></div>
                            <button class="btn btn-light rounded-circle position-absolute top-0 end-0 m-2 p-2 lh-1 text-secondary-custom shadow-sm bg-white bg-opacity-75" style="backdrop-filter: blur(4px);">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                            <div class="position-absolute bottom-0 start-0 w-100 p-3 quick-add-btn">
                                <button class="btn w-100 bg-primary-container text-white fw-bold text-uppercase py-2 rounded-3" style="letter-spacing: 0.15em; font-size: 0.75rem;">Agregar</button>
                            </div>
                        </a>
                        <div class="card-body p-3 text-center d-flex flex-column justify-content-between">
                            <div>
                                <h3 class="card-title fs-6 text-primary-custom mb-1 line-clamp-1 fw-semibold">Velvet Rouge Lip Color</h3>
                                <p class="card-text small text-secondary-custom mb-2">Aura</p>
                            </div>
                            <p class="fs-5 text-primary-custom fw-medium mt-2 mb-0">$42.00</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pagination -->
            <div class="mt-5 d-flex justify-content-center">
                <nav aria-label="Page navigation">
                    <ul class="pagination mb-0 d-flex gap-1 align-items-center">
                        <li class="page-item">
                            <a aria-label="Previous" class="page-link text-decoration-none page-link-custom bg-transparent" href="#">
                                <i class="fa-solid fa-chevron-left"></i>
                            </a>
                        </li>
                        <li aria-current="page" class="page-item active">
                            <a class="page-link text-decoration-none page-link-custom shadow-sm" href="#">1</a>
                        </li>
                        <li class="page-item"><a class="page-link text-decoration-none page-link-custom bg-transparent" href="#">2</a></li>
                        <li class="page-item"><a class="page-link text-decoration-none page-link-custom bg-transparent" href="#">3</a></li>
                        <li class="page-item"><span class="px-2 text-secondary-custom">...</span></li>
                        <li class="page-item">
                            <a aria-label="Next" class="page-link text-decoration-none page-link-custom bg-transparent" href="#">
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

@endsection





