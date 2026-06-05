@extends($activeTemplate . 'layouts.frontend')
@section('content')
    <section class="product-section padding-top padding-bottom mb-5">
        <div class="container">
            
            <!-- Shop Page Header with Circular Categories (as in the 1st image) -->
            <div class="shop-header-wrapper d-flex justify-content-between align-items-center flex-wrap gap-4 mb-5 pb-4">
                <div class="shop-title-area">
                    <h1 class="shop-main-title text-dark">@lang('Products')</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb shop-breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">@lang('Home')</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@lang('Products')</li>
                        </ol>
                    </nav>
                </div>
                
                <!-- Category Circular Selector -->
                <div class="category-circular-slider d-flex align-items-center gap-3 overflow-auto py-2">
                    <a href="{{ route('products') }}" class="category-circle-item text-center text-decoration-none @if(!$categoryId) active @endif">
                        <div class="category-circle-img-wrapper">
                            <div class="category-circle-icon bg-gradient-all">
                                <i class="las la-th-large"></i>
                            </div>
                        </div>
                        <span class="category-circle-name">@lang('All')</span>
                    </a>
                    @foreach ($categories as $category)
                        @php
                            // Map category name to icon
                            $icon = 'la-leaf';
                            if (stripos($category->name, 'vegetable') !== false || stripos($category->name, 'green') !== false) {
                                $icon = 'la-carrot';
                            } elseif (stripos($category->name, 'fruit') !== false) {
                                $icon = 'la-apple-alt';
                            } elseif (stripos($category->name, 'juice') !== false || stripos($category->name, 'drink') !== false) {
                                $icon = 'la-glass-martini-alt';
                            } elseif (stripos($category->name, 'dairy') !== false || stripos($category->name, 'milk') !== false) {
                                $icon = 'la-cheese';
                            } elseif (stripos($category->name, 'meat') !== false || stripos($category->name, 'fish') !== false) {
                                $icon = 'la-drumstick-bite';
                            }
                        @endphp
                        <a href="{{ route('products', $category->id) }}" class="category-circle-item text-center text-decoration-none @if($categoryId == $category->id) active @endif">
                            <div class="category-circle-img-wrapper">
                                <div class="category-circle-icon">
                                    <i class="las {{ $icon }}"></i>
                                </div>
                            </div>
                            <span class="category-circle-name">{{ __($category->name) }}</span>
                        </a>
                    @endforeach
                </div>
            </div>

            <div class="row g-4">
                <!-- Sidebar Filter Column (3-cols) -->
                <div class="col-lg-3">
                    <div class="catalog-sidebar-card p-4">
                        <div class="sidebar-filter-block mb-4">
                            <div class="d-flex justify-content-between align-items-center sidebar-filter-title mb-3">
                                <h5 class="m-0 text-dark font-weight-bold">@lang('Categories')</h5>
                                <i class="las la-angle-up text-muted"></i>
                            </div>
                            <ul class="sidebar-list p-0 m-0 list-unstyled">
                                <li class="mb-3">
                                    <label class="sidebar-radio-label d-flex justify-content-between align-items-center cursor-pointer">
                                        <div class="d-flex align-items-center gap-2">
                                            <input type="radio" name="category_filter" class="form-check-input" onclick="location='{{ route('products') }}';" @if(!$categoryId) checked @endif>
                                            <span class="filter-name @if(!$categoryId) text-primary-custom @endif">@lang('All')</span>
                                        </div>
                                        <span class="filter-count">({{ App\Models\Product::active()->hasCategory()->count() }})</span>
                                    </label>
                                </li>
                                @foreach ($categories as $category)
                                    <li class="mb-3">
                                        <label class="sidebar-radio-label d-flex justify-content-between align-items-center cursor-pointer">
                                            <div class="d-flex align-items-center gap-2">
                                                <input type="radio" name="category_filter" class="form-check-input" onclick="location='{{ route('products', $category->id) }}';" @if($categoryId == $category->id) checked @endif>
                                                <span class="filter-name @if($categoryId == $category->id) text-primary-custom @endif">{{ __($category->name) }}</span>
                                            </div>
                                            <span class="filter-count">({{ $category->products()->active()->count() }})</span>
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        
                        <hr class="border-color-light my-4">
                        
                        <!-- Price Range Filter (matching 1st image) -->
                        <div class="sidebar-filter-block">
                            <div class="d-flex justify-content-between align-items-center sidebar-filter-title mb-3">
                                <h5 class="m-0 text-dark font-weight-bold">@lang('Price')</h5>
                                <i class="las la-angle-up text-muted"></i>
                            </div>
                            <div class="price-range-slider-wrapper px-2">
                                <input type="range" class="form-range custom-range" min="10" max="500" step="5" value="250" id="priceRange">
                                <div class="d-flex justify-content-between align-items-center mt-3 text-muted font-13">
                                    <span>Min: ₹10</span>
                                    <span class="text-dark font-weight-semibold">₹250</span>
                                    <span>Max: ₹500</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Products Catalog Listing (9-cols) -->
                <div class="col-lg-9">
                    <!-- Toolbar (Search, Sort, and Grid/List toggle as in the 1st image) -->
                    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3 p-3 bg-white rounded-3 border-custom">
                        <div class="d-flex align-items-center flex-grow-1 max-width-400">
                            <form action="" method="GET" class="w-100 m-0">
                                @if(request()->sort)
                                    <input type="hidden" name="sort" value="{{ request()->sort }}">
                                @endif
                                <div class="position-relative">
                                    <input type="text" name="search" class="form-control shop-search-input" placeholder="@lang('Search Product')" value="{{ request()->search }}">
                                    <i class="las la-search position-absolute end-0 top-50 translate-middle-y me-3 text-muted" style="cursor: pointer;" onclick="$(this).closest('form').submit();"></i>
                                </div>
                            </form>
                        </div>
                        
                        <div class="d-flex align-items-center gap-3 flex-wrap">
                            <div class="d-flex align-items-center gap-2">
                                <select class="form-select shop-sorting-select" onchange="location = this.value;">
                                    <option value="" disabled selected>@lang('Sort By')</option>
                                    <option value="{{ request()->fullUrlWithQuery(['sort' => 'latest']) }}" @if(request()->sort == 'latest') selected @endif>@lang('Latest')</option>
                                    <option value="{{ request()->fullUrlWithQuery(['sort' => 'price_asc']) }}" @if(request()->sort == 'price_asc') selected @endif>@lang('Price: Low to High')</option>
                                    <option value="{{ request()->fullUrlWithQuery(['sort' => 'price_desc']) }}" @if(request()->sort == 'price_desc') selected @endif>@lang('Price: High to Low')</option>
                                </select>
                            </div>
                            
                            <!-- Visual Grid/List Toggle Buttons -->
                            <div class="d-flex align-items-center gap-2 shop-view-toggles">
                                <button class="btn btn-outline-custom active" type="button"><i class="las la-th-large"></i></button>
                                <button class="btn btn-outline-custom" type="button"><i class="las la-list"></i></button>
                            </div>
                        </div>
                    </div>

                    <!-- Products Grid -->
                    <div class="row g-2 g-md-4 justify-content-center">
                        @forelse ($products as $product)
                            <div class="col-xl-4 col-md-6 col-sm-6 col-6">
                                <div class="product-item-shop h-100">
                                    <div class="product-thumb-shop">
                                        <span class="product-badge-stock-shop @if($product->quantity > 0) in-stock @else out-stock @endif">
                                            @if($product->quantity > 0) @lang('in stock') @else @lang('out stock') @endif
                                        </span>
                                        <a href="{{ route('product.details', ['id' => $product->id, 'slug' => slug($product->name)]) }}">
                                            <img src="{{ getImage(getFilePath('products') . '/' . $product->thumbnail, getFileSize('products')) }}" alt="products">
                                        </a>
                                    </div>
                                    <div class="product-content-shop text-center">
                                        <span class="product-cat-tag">{{ __($product->category->name) }}</span>
                                        <h6 class="product-title-shop">
                                            <a href="{{ route('product.details', ['id' => $product->id, 'slug' => slug($product->name)]) }}">
                                                {{ __(shortDescription($product->name, 45)) }}
                                            </a>
                                        </h6>
                                        <div class="product-rating-shop my-2">
                                            <div class="stars-gold">
                                                <i class="las la-star"></i>
                                                <i class="las la-star"></i>
                                                <i class="las la-star"></i>
                                                <i class="las la-star"></i>
                                                <i class="las la-star"></i>
                                                <span class="rating-count text-muted">(0)</span>
                                            </div>
                                        </div>
                                        <div class="product-price-shop">
                                            <span class="current-price-shop">{{ showAmount($product->price) }}</span>
                                            <span class="original-price-shop text-muted text-decoration-line-through">{{ showAmount($product->price * 1.15) }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 text-center py-5">
                                <div class="text-muted">
                                    <i class="las la-box-open font-40 mb-3" style="font-size: 64px; color: var(--primary-color);"></i>
                                    <h5>@lang('No products found matching your criteria.')</h5>
                                </div>
                            </div>
                        @endforelse
                    </div>

                    <!-- Pagination -->
                    @if ($products->hasPages())
                        <div class="pagination-wrapper mt-5 d-flex justify-content-center">
                            {{ paginateLinks($products) }}
                        </div>
                    @endif
                </div>
            </div>

            <!-- Trust / Features Section -->
            <div class="features-section mt-5 mb-5">
                <div class="row gy-4">
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-card">
                            <div class="feature-icon-wrapper">
                                <i class="las la-certificate"></i>
                            </div>
                            <h5>@lang('Certified Organic')</h5>
                            <p class="text-muted font-13 mb-0">100% natural, certified chemical-free farm ingredients.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-card">
                            <div class="feature-icon-wrapper">
                                <i class="las la-truck"></i>
                            </div>
                            <h5>@lang('Express Sourcing')</h5>
                            <p class="text-muted font-13 mb-0">Fresh harvest delivered direct to your door safely.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-card">
                            <div class="feature-icon-wrapper">
                                <i class="las la-leaf"></i>
                            </div>
                            <h5>@lang('Eco Friendly')</h5>
                            <p class="text-muted font-13 mb-0">Packaged responsibly in biodegradable materials.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-card">
                            <div class="feature-icon-wrapper">
                                <i class="las la-headset"></i>
                            </div>
                            <h5>@lang('24/7 Support')</h5>
                            <p class="text-muted font-13 mb-0">Our dedicated service team is always ready to assist.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="faq-section mb-5">
                <div class="section-header text-center mb-4">
                    <h3 class="title text-dark">@lang('Frequently Asked Questions')</h3>
                    <p class="text-muted">Quick answers to common questions about our products & organic certifications.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="faq-accordion">
                            <div class="faq-accordion-item">
                                <div class="faq-header">
                                    <h6 class="faq-question">@lang('Are these products 100% organic?')</h6>
                                    <span class="faq-icon"><i class="las la-chevron-down"></i></span>
                                </div>
                                <div class="faq-content-box">
                                    <div class="faq-content">
                                        @lang('Yes! Every item in our Organic Products line is certified 100% organic by standard agricultural boards. We strictly ensure no artificial chemicals or synthetic additives are used during growth and processing.')
                                    </div>
                                </div>
                            </div>
                            <div class="faq-accordion-item">
                                <div class="faq-header">
                                    <h6 class="faq-question">@lang('How is the freshness maintained during delivery?')</h6>
                                    <span class="faq-icon"><i class="las la-chevron-down"></i></span>
                                </div>
                                <div class="faq-content-box">
                                    <div class="faq-content">
                                        @lang('We package all farm-fresh items in insulated, temperature-controlled boxes. Dispatch cycles are aligned with rapid-sourcing corridors so they arrive at your location fresh and intact.')
                                    </div>
                                </div>
                            </div>
                            <div class="faq-accordion-item">
                                <div class="faq-header">
                                    <h6 class="faq-question">@lang('What is your return and refund policy?')</h6>
                                    <span class="faq-icon"><i class="las la-chevron-down"></i></span>
                                </div>
                                <div class="faq-content-box">
                                    <div class="faq-content">
                                        @lang('We offer a 14-day hassle-free return policy. If you receive an item that is damaged, defective, or if the original seal is intact and you change your mind, we will process a full replacement or refund.')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Newsletter CTA Section -->
            <div class="newsletter-section mb-4">
                <div class="newsletter-cta-card">
                    <h3>@lang('Join Our Organic Community')</h3>
                    <p>Subscribe to get updates on new products, harvest arrivals, and exclusive member discounts.</p>
                    <div class="newsletter-input-group">
                        <form action="" method="GET" class="d-flex w-100">
                            <input type="email" class="form-control newsletter-input" placeholder="@lang('Enter your email address')" required>
                            <button class="newsletter-btn" type="submit">@lang('Subscribe')</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

@push('script')
    <script>
        (function($) {
            "use strict";
            $('.faq-header').on('click', function() {
                var item = $(this).closest('.faq-accordion-item');
                var contentBox = item.find('.faq-content-box');
                
                if (item.hasClass('active')) {
                    item.removeClass('active');
                    contentBox.css('max-height', '0');
                } else {
                    $('.faq-accordion-item').removeClass('active');
                    $('.faq-content-box').css('max-height', '0');
                    
                    item.addClass('active');
                    contentBox.css('max-height', contentBox[0].scrollHeight + 'px');
                }
            });
        })(jQuery);
    </script>
@endpush
