@extends($activeTemplate . 'layouts.frontend')

@section('content')
<div class="organic-body">
    
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="bg-blob"></div>
        <div class="container">
            <div class="row align-items-center gy-5">
                <!-- Left text content -->
                <div class="col-lg-6 hero-content">
                    <div class="hero-subtitle">
                        <i class="las la-leaf text-success"></i> Pure Products. Real Health.
                    </div>
                    <h1 class="hero-title">
                        Build A Business That<br><span>Nourishes Lives</span>
                    </h1>
                    <p class="hero-description">
                        Join Nooryak Organic Living - an organic & grocery MLM platform where wellness meets opportunity. Earn by sharing natural, high-quality products and help build a healthier world.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="{{ route('user.register') }}" class="btn-primary-custom">
                            Start Your Journey <i class="las la-arrow-right"></i>
                        </a>
                        <a href="{{ route('products') }}" class="btn-secondary-custom">
                            Explore Products <i class="las la-arrow-right"></i>
                        </a>
                    </div>
                    
                    <!-- Bottom Hero Features -->
                    <div class="hero-features">
                        <div class="hero-feature-item">
                            <div class="hero-feature-icon">
                                <i class="las la-certificate"></i>
                            </div>
                            <div class="hero-feature-text">
                                100% Organic
                                <span>Trusted Products</span>
                            </div>
                        </div>
                        <div class="hero-feature-item">
                            <div class="hero-feature-icon">
                                <i class="las la-shield-alt"></i>
                            </div>
                            <div class="hero-feature-text">
                                Safe & Secure
                                <span>Payments Shield</span>
                            </div>
                        </div>
                        <div class="hero-feature-item">
                            <div class="hero-feature-icon">
                                <i class="las la-truck"></i>
                            </div>
                            <div class="hero-feature-text">
                                Fast & Reliable
                                <span>Doorstep Delivery</span>
                            </div>
                        </div>
                        <div class="hero-feature-item">
                            <div class="hero-feature-icon">
                                <i class="las la-headset"></i>
                            </div>
                            <div class="hero-feature-text">
                                Support 24/7
                                <span>Always Available</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Right banner image -->
                <div class="col-lg-6 hero-image-container">
                    <div class="position-relative">
                        <div class="hero-decorative-shape"></div>
                        <img src="{{ asset('assets/templates/basic/images/organic_grocery_hero.png') }}" alt="Organic Products Basket" class="hero-main-img">
                        
                        <!-- Floating Trusted Widget -->
                        <div class="trusted-widget">
                            <div class="trusted-avatars">
                                <div class="trusted-avatar" style="background-image: url('{{ asset('assets/images/default-user.png') }}');"></div>
                                <div class="trusted-avatar" style="background-image: url('{{ asset('assets/images/default-user.png') }}'); margin-left: -12px;"></div>
                                <div class="trusted-avatar" style="background-image: url('{{ asset('assets/images/default-user.png') }}'); margin-left: -12px;"></div>
                                <div class="trusted-avatar" style="background-image: url('{{ asset('assets/images/default-user.png') }}'); margin-left: -12px;"></div>
                            </div>
                            <div>
                                <h5 class="trusted-title">Trusted By Thousands</h5>
                                <span class="trusted-badge">10K+</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Organic Categories Section -->
    <section class="py-5" id="categories" style="background: #ffffff;">
        <div class="container">
            <div class="section-title-wrapper">
                <span class="section-subtitle-arrow">Our Organic Product Categories</span>
                <h2 class="section-main-title">Fresh From Nature</h2>
            </div>
            
            <div class="slider-container-wrapper">
                <button class="slider-nav-btn prev-btn"><i class="las la-angle-left"></i></button>
                <div class="categories-grid-container">
                    
                    <!-- Fruits & Veggies -->
                    <a href="{{ route('products') }}" class="category-card-custom">
                        <div class="category-icon-wrapper">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#ff6f3d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/>
                                <path d="M12 6V2"/>
                                <path d="M16 8c-1.5-1.5-3.5-1.5-5 0"/>
                            </svg>
                        </div>
                        <h5 class="category-card-title">Fruits & Vegetables</h5>
                    </a>
                    
                    <!-- Grains & Pulses -->
                    <a href="{{ route('products') }}" class="category-card-custom">
                        <div class="category-icon-wrapper">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#ff6f3d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                            </svg>
                        </div>
                        <h5 class="category-card-title">Grains & Pulses</h5>
                    </a>
                    
                    <!-- Oils & Ghee -->
                    <a href="{{ route('products') }}" class="category-card-custom">
                        <div class="category-icon-wrapper">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#ff6f3d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22a7 7 0 0 0 7-7c0-4.3-7-13-7-13S5 10.7 5 15a7 7 0 0 0 7 7z"/>
                            </svg>
                        </div>
                        <h5 class="category-card-title">Oils & Ghee</h5>
                    </a>
                    
                    <!-- Nuts & Dry Fruits -->
                    <a href="{{ route('products') }}" class="category-card-custom">
                        <div class="category-icon-wrapper">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#ff6f3d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <ellipse cx="12" cy="12" rx="10" ry="6"/>
                                <path d="M12 6c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6z"/>
                            </svg>
                        </div>
                        <h5 class="category-card-title">Nuts & Dry Fruits</h5>
                    </a>
                    
                    <!-- Spices & Herbs -->
                    <a href="{{ route('products') }}" class="category-card-custom">
                        <div class="category-icon-wrapper">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#ff6f3d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 22C16 22 22 16 22 2"/>
                                <path d="M12 14c2-2 3-5 3-8s-3-1-3-1-3 1-3 4 1 3 3 5z"/>
                            </svg>
                        </div>
                        <h5 class="category-card-title">Spices & Herbs</h5>
                    </a>
                    
                    <!-- Natural Sweeteners -->
                    <a href="{{ route('products') }}" class="category-card-custom">
                        <div class="category-icon-wrapper">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#ff6f3d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                                <path d="M12 6a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                            </svg>
                        </div>
                        <h5 class="category-card-title">Natural Sweeteners</h5>
                    </a>
                    
                    <!-- Personal Care -->
                    <a href="{{ route('products') }}" class="category-card-custom">
                        <div class="category-icon-wrapper">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#ff6f3d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 2a5 5 0 0 0-5 5v3a5 5 0 0 0 10 0V7a5 5 0 0 0-5-5z"/>
                                <path d="M19 10v1a7 7 0 0 1-14 0v-1"/>
                                <line x1="12" y1="19" x2="12" y2="22"/>
                            </svg>
                        </div>
                        <h5 class="category-card-title">Personal Care</h5>
                    </a>
                    
                    <!-- Home Essentials -->
                    <a href="{{ route('products') }}" class="category-card-custom">
                        <div class="category-icon-wrapper">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#ff6f3d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                                <polyline points="9 22 9 12 15 12 15 22"/>
                            </svg>
                        </div>
                        <h5 class="category-card-title">Home Essentials</h5>
                    </a>
                    
                </div>
                <button class="slider-nav-btn next-btn"><i class="las la-angle-right"></i></button>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    @php
        $aboutContent = getContent('about.content', true);
    @endphp
    <section class="about-mlm-section" id="about">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-6">
                    <img src="{{ asset('assets/templates/basic/images/mlm_about_growth.png') }}" alt="MLM About Growth Stairs" class="about-mlm-img">
                </div>
                <div class="col-lg-6">
                    <div class="text-start mb-4">
                        <span class="section-subtitle-arrow" style="margin-left: 0; display: inline-flex;">ABOUT US</span>
                        <h2 class="section-main-title text-start mt-2">
                            {{ @$aboutContent->data_values->heading ?? 'Seamless & Profitable Multi-Level Marketing Made Easy' }}
                        </h2>
                        <p class="text-muted mt-3" style="font-size: 15px; line-height: 1.6;">
                            {{ @$aboutContent->data_values->description ?? 'Nooryak Binary Ecom is a next-gen e-commerce MLM platform designed to help you earn more by sharing and shopping smartly. Our binary plan ensures balanced growth and maximum income potential with transparency and trust at every level.' }}
                        </p>
                    </div>
                    <a href="{{ route('products') }}" class="btn-primary-custom">
                        Read More <i class="las la-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services MLM Section -->
    <section class="services-mlm-section" id="services">
        <div class="container">
            <div class="section-title-wrapper">
                <span class="section-subtitle-arrow">OUR SERVICES</span>
                <h2 class="section-main-title">Our Exceptional Services for Your Success</h2>
            </div>
            
            <div class="services-mlm-grid">
                
                <!-- Service 1 -->
                <div class="service-mlm-card">
                    <div class="service-mlm-icon-wrapper">
                        <i class="las la-user-plus"></i>
                    </div>
                    <h4 class="service-mlm-title">Join & Get Started</h4>
                    <p class="service-mlm-desc">Create your free account and become a part of our global network.</p>
                </div>
                
                <!-- Service 2 -->
                <div class="service-mlm-card">
                    <div class="service-mlm-icon-wrapper">
                        <i class="las la-share-alt"></i>
                    </div>
                    <h4 class="service-mlm-title">Refer & Earn</h4>
                    <p class="service-mlm-desc">Share your referral link and earn commissions on every purchase.</p>
                </div>
                
                <!-- Service 3 -->
                <div class="service-mlm-card">
                    <div class="service-mlm-icon-wrapper">
                        <i class="las la-shopping-basket"></i>
                    </div>
                    <h4 class="service-mlm-title">Wide Range of Products</h4>
                    <p class="service-mlm-desc">Choose from thousands of quality products across top categories.</p>
                </div>
                
                <!-- Service 4 -->
                <div class="service-mlm-card">
                    <div class="service-mlm-icon-wrapper">
                        <i class="las la-sitemap"></i>
                    </div>
                    <h4 class="service-mlm-title">Binary Income Plan</h4>
                    <p class="service-mlm-desc">Our powerful binary plan ensures balanced growth and higher earnings.</p>
                </div>
                
                <!-- Service 5 -->
                <div class="service-mlm-card">
                    <div class="service-mlm-icon-wrapper">
                        <i class="las la-wallet"></i>
                    </div>
                    <h4 class="service-mlm-title">Payout & Withdrawal</h4>
                    <p class="service-mlm-desc">Enjoy secure, instant and hassle-free withdrawals anytime.</p>
                </div>
                
                <!-- Service 6 -->
                <div class="service-mlm-card">
                    <div class="service-mlm-icon-wrapper">
                        <i class="las la-award"></i>
                    </div>
                    <h4 class="service-mlm-title">Sales & Rank Achievement</h4>
                    <p class="service-mlm-desc">Achieve sales targets, rank up and unlock bonuses & rewards.</p>
                </div>
                
            </div>
        </div>
    </section>

    <!-- How MLM Works Section -->
    <section class="mlm-process-section" id="how-it-works">
        <div class="container">
            <div class="section-title-wrapper">
                <span class="section-subtitle-arrow">How Our MLM Business Works</span>
                <h2 class="section-main-title">Simple 5 Steps to Growth</h2>
            </div>
            
            <div class="mlm-steps-container">
                <div class="mlm-steps-connector"></div>
                
                <!-- Step 1 -->
                <div class="mlm-step-item">
                    <div class="mlm-step-circle">
                        <div class="mlm-step-circle-inner">
                            <i class="las la-user-plus"></i>
                        </div>
                    </div>
                    <h4 class="mlm-step-title">Join for Free</h4>
                    <p class="mlm-step-desc">Sign up easily and become a part of our organic wellness movement.</p>
                </div>
                
                <!-- Step 2 -->
                <div class="mlm-step-item">
                    <div class="mlm-step-circle">
                        <div class="mlm-step-circle-inner">
                            <i class="las la-share-alt"></i>
                        </div>
                    </div>
                    <h4 class="mlm-step-title">Share & Refer</h4>
                    <p class="mlm-step-desc">Share Nooryak Organic products with your friends, family & community.</p>
                </div>
                
                <!-- Step 3 -->
                <div class="mlm-step-item">
                    <div class="mlm-step-circle">
                        <div class="mlm-step-circle-inner">
                            <i class="las la-shopping-cart"></i>
                        </div>
                    </div>
                    <h4 class="mlm-step-title">They Shop</h4>
                    <p class="mlm-step-desc">Your referrals shop for premium high-quality organic products.</p>
                </div>
                
                <!-- Step 4 -->
                <div class="mlm-step-item">
                    <div class="mlm-step-circle">
                        <div class="mlm-step-circle-inner">
                            <i class="las la-wallet"></i>
                        </div>
                    </div>
                    <h4 class="mlm-step-title">You Earn</h4>
                    <p class="mlm-step-desc">Earn commissions on every purchase made by your referrals.</p>
                </div>
                
                <!-- Step 5 -->
                <div class="mlm-step-item">
                    <div class="mlm-step-circle">
                        <div class="mlm-step-circle-inner">
                            <i class="las la-users"></i>
                        </div>
                    </div>
                    <h4 class="mlm-step-title">Grow Your Network</h4>
                    <p class="mlm-step-desc">Build your downline and grow your income exponentially.</p>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Binary MLM & E-Commerce Integration Section -->
    <section class="binary-mlm-section" id="benefits-mlm">
        <div class="container">
            <div class="section-title-wrapper">
                <span class="section-subtitle-arrow">Binary MLM & E-Commerce Compensation</span>
                <h2 class="section-main-title">Earn with Dual-Leg Team Building</h2>
            </div>
            
            <div class="row align-items-center gy-5">
                <!-- Left side: Interactive Binary Tree Visualizer -->
                <div class="col-lg-6">
                    <div class="binary-tree-card">
                        
                        <!-- Connecting lines SVG -->
                        <svg class="tree-lines" viewBox="0 0 400 240">
                            <!-- Root to Children -->
                            <line x1="200" y1="55" x2="110" y2="125" stroke="#ff6f3d" stroke-width="2" stroke-dasharray="4" />
                            <line x1="200" y1="55" x2="290" y2="125" stroke="#ff6f3d" stroke-width="2" stroke-dasharray="4" />
                            <!-- Left Child to Grandchildren -->
                            <line x1="110" y1="140" x2="65" y2="200" stroke="#cbd5e1" stroke-width="1.5" />
                            <line x1="110" y1="140" x2="155" y2="200" stroke="#cbd5e1" stroke-width="1.5" />
                            <!-- Right Child to Grandchildren -->
                            <line x1="290" y1="140" x2="245" y2="200" stroke="#cbd5e1" stroke-width="1.5" />
                            <line x1="290" y1="140" x2="335" y2="200" stroke="#cbd5e1" stroke-width="1.5" />
                        </svg>

                        <!-- Row 1: Root Node (You) -->
                        <div class="tree-row row-root">
                            <div class="tree-node node-active" onclick="showNodeInfo('You', 'Sponsor', 'Total Downlines: 83 | Match Level: 3')">
                                <div class="node-icon"><i class="las la-user-tie"></i></div>
                                <span class="node-label">You (Sponsor)</span>
                                <span class="node-badge">Active</span>
                            </div>
                        </div>

                        <!-- Row 2: Children (Left & Right legs) -->
                        <div class="tree-row row-children">
                            <div class="tree-node node-left" onclick="showNodeInfo('Left Leg Team', '45 Members', 'Accumulated Volume: 1,200 BV')">
                                <div class="node-icon"><i class="las la-users"></i></div>
                                <span class="node-label">Left Leg</span>
                                <span class="node-volume text-success">1,200 BV</span>
                            </div>
                            <div class="tree-node node-right" onclick="showNodeInfo('Right Leg Team', '38 Members', 'Accumulated Volume: 1,000 BV')">
                                <div class="node-icon"><i class="las la-users"></i></div>
                                <span class="node-label">Right Leg</span>
                                <span class="node-volume text-warning">1,000 BV</span>
                            </div>
                        </div>

                        <!-- Row 3: Grandchildren -->
                        <div class="tree-row row-grandchildren">
                            <div class="tree-node node-sub" onclick="showNodeInfo('Downline A (LL)', 'Level 2 Active', 'Leg Volume: 400 BV')">
                                <div class="node-icon"><i class="las la-user"></i></div>
                            </div>
                            <div class="tree-node node-sub" onclick="showNodeInfo('Downline B (LR)', 'Level 2 Active', 'Leg Volume: 800 BV')">
                                <div class="node-icon"><i class="las la-user"></i></div>
                            </div>
                            <div class="tree-node node-sub" onclick="showNodeInfo('Downline C (RL)', 'Level 2 Active', 'Leg Volume: 300 BV')">
                                <div class="node-icon"><i class="las la-user"></i></div>
                            </div>
                            <div class="tree-node node-sub" onclick="showNodeInfo('Downline D (RR)', 'Level 2 Active', 'Leg Volume: 700 BV')">
                                <div class="node-icon"><i class="las la-user"></i></div>
                            </div>
                        </div>

                        <!-- Info display / interactive tooltip inside card -->
                        <div class="node-tooltip-card" id="node-info-display">
                            Click nodes above to view binary volume, leg distribution, and active BV downline status.
                        </div>
                    </div>
                </div>
                
                <!-- Right side: Details card lists -->
                <div class="col-lg-6">
                    <div class="mlm-details-grid">
                        
                        <!-- Card 1 -->
                        <div class="mlm-details-card">
                            <div class="mlm-details-num">1</div>
                            <div class="mlm-details-info">
                                <h4 class="mlm-details-title">Direct Referral Cash Commissions</h4>
                                <p class="mlm-details-desc">
                                    Introduce new members directly to your downline tree. E-Commerce subscriptions trigger high instant sponsor rewards paid directly into your wallet.
                                </p>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="mlm-details-card">
                            <div class="mlm-details-num">2</div>
                            <div class="mlm-details-info">
                                <h4 class="mlm-details-title">1:1 Binary Leg Pair Matching</h4>
                                <p class="mlm-details-desc">
                                    Balance your business volume (BV) between the Left Leg and Right Leg. Whenever 100 BV is matched on both sides, unlock binary matching bonuses immediately.
                                </p>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="mlm-details-card">
                            <div class="mlm-details-num">3</div>
                            <div class="mlm-details-info">
                                <h4 class="mlm-details-title">Product Purchases Business Volume (BV)</h4>
                                <p class="mlm-details-desc">
                                    Every organic item sold or bought in your group's online shop generates Business Volume. This ensures continuous, residual earnings from retail sales.
                                </p>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="mlm-details-card">
                            <div class="mlm-details-num">4</div>
                            <div class="mlm-details-info">
                                <h4 class="mlm-details-title">Secured Network Growth & Capping Limits</h4>
                                <p class="mlm-details-desc">
                                    Unlock higher ranking rewards and expand your binary structure by driving direct sales volume and qualifying matching caps.
                                </p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Refer Promo Banner Section -->
    <section class="refer-promo-section">
        <div class="container">
            <div class="refer-promo-banner">
                <div class="row align-items-center gy-4">
                    <div class="col-lg-7 text-start">
                        <h3 class="refer-promo-title">Refer a Friend & Get Commission on every Transaction</h3>
                        <p class="refer-promo-desc">
                            Help your friends discover great products and earn commission on their purchases. It's a win-win partnership! Build your network and scale your business limits.
                        </p>
                        <a href="{{ route('user.register') }}" class="btn-primary-custom">Get Started <i class="las la-arrow-right"></i></a>
                    </div>
                    <div class="col-lg-5 text-center">
                        <img src="{{ asset('assets/templates/basic/images/mlm_referral_promo.png') }}" alt="Refer promo mobile handshake" class="refer-promo-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-section" id="benefits">
        <div class="container">
            <div class="row align-items-center gy-5">
                <!-- Left Image side -->
                <div class="col-lg-6">
                    <img src="{{ asset('assets/templates/basic/images/why_choose_organic.png') }}" alt="Why Choose Us Natural Flatlay" class="why-choose-img">
                </div>
                
                <!-- Right feature grid side -->
                <div class="col-lg-6 why-choose-content">
                    <div class="text-start mb-4">
                        <span class="section-subtitle-arrow" style="margin-left: 0; display: inline-flex;">Why Choose Nooryak</span>
                        <h2 class="section-main-title text-start mt-2">Organic Living?</h2>
                        <p class="text-muted mt-3" style="font-size: 15px; line-height: 1.6;">
                            We are more than a business - we are a movement towards a healthier, happier, and sustainable lifestyle.
                        </p>
                    </div>
                    
                    <div class="why-choose-features-grid">
                        
                        <!-- Feature 1 -->
                        <div class="why-feature-card">
                            <div class="why-feature-icon">
                                <i class="las la-seedling"></i>
                            </div>
                            <h4 class="why-feature-title">Pure & Natural</h4>
                            <p class="why-feature-desc">100% organic and chemical-free products you can trust.</p>
                        </div>
                        
                        <!-- Feature 2 -->
                        <div class="why-feature-card">
                            <div class="why-feature-icon">
                                <i class="las la-chart-line"></i>
                            </div>
                            <h4 class="why-feature-title">Great Income Opportunity</h4>
                            <p class="why-feature-desc">Earn passive commissions with no limits on your growth.</p>
                        </div>
                        
                        <!-- Feature 3 -->
                        <div class="why-feature-card">
                            <div class="why-feature-icon">
                                <i class="las la-hand-holding-usd"></i>
                            </div>
                            <h4 class="why-feature-title">Zero Investment</h4>
                            <p class="why-feature-desc">Join for free and start your journey without any hidden charges.</p>
                        </div>
                        
                        <!-- Feature 4 -->
                        <div class="why-feature-card">
                            <div class="why-feature-icon">
                                <i class="las la-globe-americas"></i>
                            </div>
                            <h4 class="why-feature-title">Healthier World</h4>
                            <p class="why-feature-desc">Promote wellness and help create a better future for all.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Best Sellers Section -->
    <section class="best-sellers-section" id="testimonials">
        <div class="container">
            <div class="section-title-wrapper">
                <span class="section-subtitle-arrow">Our Best Selling Products</span>
                <h2 class="section-main-title">Customer Favorites</h2>
            </div>
            
            <div class="product-slider-wrapper">
                <div class="products-grid-custom">
                    
                    <!-- Product 1: Toor Dal -->
                    <a href="{{ route('products') }}" class="product-card-custom">
                        <div class="product-image-wrapper">
                            <img src="{{ asset('assets/images/products/organic_chia_seeds.png') }}" alt="Organic Toor Dal">
                        </div>
                        <div class="product-info-wrapper">
                            <h4 class="product-custom-title">Organic Toor Dal</h4>
                            <div class="product-card-bottom">
                                <span class="product-custom-price">$5.49</span>
                                <button class="product-add-btn"><i class="las la-plus"></i></button>
                            </div>
                        </div>
                    </a>
                    
                    <!-- Product 2: Mustard Oil -->
                    <a href="{{ route('products') }}" class="product-card-custom">
                        <div class="product-image-wrapper">
                            <img src="{{ asset('assets/images/products/organic_coconut_oil.png') }}" alt="Cold Pressed Mustard Oil">
                        </div>
                        <div class="product-info-wrapper">
                            <h4 class="product-custom-title">Cold Pressed Mustard Oil</h4>
                            <div class="product-card-bottom">
                                <span class="product-custom-price">$7.99</span>
                                <button class="product-add-btn"><i class="las la-plus"></i></button>
                            </div>
                        </div>
                    </a>
                    
                    <!-- Product 3: Basmati Rice -->
                    <a href="{{ route('products') }}" class="product-card-custom">
                        <div class="product-image-wrapper">
                            <!-- Custom wheat/grain icon fallback for rice -->
                            <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#ff6f3d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style="opacity: 0.85;">
                                <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                            </svg>
                        </div>
                        <div class="product-info-wrapper">
                            <h4 class="product-custom-title">Organic Basmati Rice</h4>
                            <div class="product-card-bottom">
                                <span class="product-custom-price">$8.49</span>
                                <button class="product-add-btn"><i class="las la-plus"></i></button>
                            </div>
                        </div>
                    </a>
                    
                    <!-- Product 4: Almonds -->
                    <a href="{{ route('products') }}" class="product-card-custom">
                        <div class="product-image-wrapper">
                            <!-- Custom nut icon fallback -->
                            <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#ff6f3d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style="opacity: 0.85;">
                                <ellipse cx="12" cy="12" rx="10" ry="6"/>
                                <path d="M12 6c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6z"/>
                            </svg>
                        </div>
                        <div class="product-info-wrapper">
                            <h4 class="product-custom-title">Raw Almonds</h4>
                            <div class="product-card-bottom">
                                <span class="product-custom-price">$8.99</span>
                                <button class="product-add-btn"><i class="las la-plus"></i></button>
                            </div>
                        </div>
                    </a>
                    
                    <!-- Product 5: Honey -->
                    <a href="{{ route('products') }}" class="product-card-custom">
                        <div class="product-image-wrapper">
                            <img src="{{ asset('assets/images/products/organic_honey.png') }}" alt="Organic Honey">
                        </div>
                        <div class="product-info-wrapper">
                            <h4 class="product-custom-title">Organic Honey</h4>
                            <div class="product-card-bottom">
                                <span class="product-custom-price">$6.49</span>
                                <button class="product-add-btn"><i class="las la-plus"></i></button>
                            </div>
                        </div>
                    </a>
                    
                    <!-- Product 6: Green Tea -->
                    <a href="{{ route('products') }}" class="product-card-custom">
                        <div class="product-image-wrapper">
                            <img src="{{ asset('assets/images/products/organic_green_tea.png') }}" alt="Organic Green Tea">
                        </div>
                        <div class="product-info-wrapper">
                            <h4 class="product-custom-title">Organic Green Tea</h4>
                            <div class="product-card-bottom">
                                <span class="product-custom-price">$4.99</span>
                                <button class="product-add-btn"><i class="las la-plus"></i></button>
                            </div>
                        </div>
                    </a>
                    
                </div>
            </div>
        </div>
    </section>



    <!-- Testimonials Section -->
    @php
        $testContent = getContent('testimonial.content', true);
        $testElements = getContent('testimonial.element');
    @endphp
    <section class="testimonials-mlm-section" id="testimonials-cloud">
        <div class="container">
            <div class="row align-items-center gy-5">
                <!-- <div class="col-lg-6">
                    <div class="testimonial-mlm-bubble">
                        <div class="testimonial-mlm-content text-start">
                            @if($testElements && count($testElements) > 0)
                                <p class="testimonial-mlm-quote">{{ __($testElements[0]->data_values->quote) }}</p>
                                <span class="testimonial-mlm-author">{{ __($testElements[0]->data_values->author) }}</span>
                                <span class="testimonial-mlm-badge">{{ __($testElements[0]->data_values->designation) }}</span>
                            @else
                                <p class="testimonial-mlm-quote">
                                    Customer testimonials are a beneficial type of social proof: they tell potential new customers about the successes and triumphs others have experienced. And because these are real people.
                                </p>
                                <span class="testimonial-mlm-author">Farhan Ahmed</span>
                                <span class="testimonial-mlm-badge">CEO AT GOOGLE</span>
                            @endif
                        </div>
                    </div>
                </div> -->
                
            </div>
        </div>
    </section>

    <!-- Blogs Section -->
    @php
        $blogContent = getContent('blog.content', true);
        $blogElements = getContent('blog.element', false, 3);
    @endphp
    <section class="blogs-mlm-section" id="blog">
        <div class="container">
            <div class="section-title-wrapper">
                <span class="section-subtitle-arrow">OUR BLOG</span>
                <h2 class="section-main-title">{{ __(@$blogContent->data_values->heading ?? "Discover what's new on our platform.") }}</h2>
            </div>
            
            <div class="blogs-mlm-grid">
                @if($blogElements && count($blogElements) > 0)
                    @foreach($blogElements as $blog)
                        <a href="{{ route('blog.details', $blog->slug) }}" class="blog-mlm-card">
                            <div class="blog-mlm-cover">
                                <img src="{{ frontendImage('blog', @$blog->data_values->image, '410x270') }}" alt="{{ __($blog->data_values->title) }}">
                            </div>
                            <div class="blog-mlm-info text-start">
                                <span class="blog-mlm-date">{{ showDateTime($blog->created_at, 'M d, Y') }}</span>
                                <h4 class="blog-mlm-title">{{ __($blog->data_values->title) }}</h4>
                            </div>
                        </a>
                    @endforeach
                @else
                    <!-- Fallback Static Blog Posts -->
                    <!-- Post 1 -->
                    <a href="{{ route('blog') }}" class="blog-mlm-card">
                        <div class="blog-mlm-cover">
                            <!-- Fallback tea image -->
                            <img src="{{ asset('assets/images/products/organic_green_tea.png') }}" alt="How to Maximize Earnings">
                        </div>
                        <div class="blog-mlm-info text-start">
                            <span class="blog-mlm-date">June 05, 2026</span>
                            <h4 class="blog-mlm-title">How to Maximize Your Earnings Through Referrals</h4>
                        </div>
                    </a>
                    <!-- Post 2 -->
                    <a href="{{ route('blog') }}" class="blog-mlm-card">
                        <div class="blog-mlm-cover">
                            <!-- Fallback chia seeds image -->
                            <img src="{{ asset('assets/images/products/organic_chia_seeds.png') }}" alt="Benefits of Joining Ecom">
                        </div>
                        <div class="blog-mlm-info text-start">
                            <span class="blog-mlm-date">June 04, 2026</span>
                            <h4 class="blog-mlm-title">The Benefits of Joining an E-Commerce Platform</h4>
                        </div>
                    </a>
                    <!-- Post 3 -->
                    <a href="{{ route('blog') }}" class="blog-mlm-card">
                        <div class="blog-mlm-cover">
                            <!-- Fallback honey image -->
                            <img src="{{ asset('assets/images/products/organic_honey.png') }}" alt="Top Marketing Strategies">
                        </div>
                        <div class="blog-mlm-info text-start">
                            <span class="blog-mlm-date">June 03, 2026</span>
                            <h4 class="blog-mlm-title">Top Marketing Strategies to Increase Your Referral Income</h4>
                        </div>
                    </a>
                @endif
            </div>
        </div>
    </section>

</div>
@endsection

@push('script')
<script>
    // Click handler to display Node Info dynamically inside the tree visualizer
    function showNodeInfo(name, label, detail) {
        const display = document.getElementById('node-info-display');
        display.innerHTML = `<strong>${name}</strong> (${label})<br>${detail}`;
        display.style.background = 'rgba(255, 111, 61, 0.95)';
        setTimeout(() => {
            display.style.background = 'rgba(35, 45, 36, 0.95)';
        }, 1500);
    }

    (function($) {
        "use strict";
        
        // Handle smooth horizontal scrolling for categories
        $('.next-btn').on('click', function() {
            const container = $('.categories-grid-container');
            container.animate({ scrollLeft: container.scrollLeft() + 280 }, 300);
        });
        
        $('.prev-btn').on('click', function() {
            const container = $('.categories-grid-container');
            container.animate({ scrollLeft: container.scrollLeft() - 280 }, 300);
        });
        
    })(jQuery);
</script>
@endpush
