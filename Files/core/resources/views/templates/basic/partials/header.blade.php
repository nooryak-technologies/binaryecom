<div class="overlay"></div>
<!-- Preloader -->
<div id="preloader">
    <div id="loader"></div>
</div>

<!-- Header Section Starts Here -->
<header class="header organic-header">
    <div class="header-bottom">
        <div class="container">
            <div class="header-bottom-area d-flex align-items-center justify-content-between">
                
                <!-- Logo -->
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ siteLogo('dark') }}" alt="logo">
                    </a>
                </div>

                <!-- Navigation Menu (Pill styled) -->
                <nav class="organic-nav-menu menu">
                    <!-- Mobile drawer close button -->
                    <button class="mobile-nav-close d-lg-none" aria-label="Close menu">
                        <i class="las la-times"></i>
                    </button>
                    <ul class="organic-menu">
                        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">@lang('Home')</a></li>
                        <li><a href="{{ route('home') }}#about">@lang('About Us')</a></li>
                        <li><a href="{{ route('products') }}" class="{{ request()->routeIs('products') ? 'active' : '' }}">@lang('Products')</a></li>
                        <li><a href="{{ route('home') }}#categories">@lang('Categories')</a></li>
                        <!-- <li><a href="{{ route('home') }}#how-it-works">@lang('How It Works')</a></li> -->
                        <li><a href="{{ route('home') }}#benefits">@lang('Benefits')</a></li>
                        <!-- <li><a href="{{ route('home') }}#testimonials">@lang('Testimonials')</a></li> -->
                        <li><a href="{{ route('blog') }}" class="{{ request()->routeIs('blog') ? 'active' : '' }}">@lang('Blog')</a></li>
                        <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">@lang('Contact')</a></li>
                    </ul>
                </nav>

                <!-- Header Actions (Search, User, Cart) -->
                <div class="header-icons d-flex align-items-center gap-2">
                    <button class="header-icon-btn d-none d-sm-flex" title="Search">
                        <i class="las la-search"></i>
                    </button>
                    
                    @auth
                        <a href="{{ route('user.home') }}" class="header-icon-btn" title="Dashboard">
                            <i class="las la-user"></i>
                        </a>
                    @else
                        <a href="{{ route('user.login') }}" class="header-icon-btn" title="Login">
                            <i class="las la-user"></i>
                        </a>
                    @endauth

                    <a href="{{ route('products') }}" class="header-icon-btn" title="Cart">
                        <i class="las la-shopping-basket"></i>
                        <span class="badge-count">0</span>
                    </a>

                    <!-- Mobile Menu Trigger -->
                    <button class="header-trigger-wrapper d-block d-lg-none border-0 bg-transparent p-0 ms-2">
                        <div class="header-trigger">
                            <span></span>
                        </div>
                    </button>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- Header Section Ends Here -->

