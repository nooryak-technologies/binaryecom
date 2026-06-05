@extends($activeTemplate . 'layouts.app')
@section('panel')
    @include($activeTemplate . 'partials.header')

    @include($activeTemplate.'layouts.breadcrumb')

    @yield('content')

    @include($activeTemplate . 'partials.footer')
@endsection

@push('script')
    <script>
        (function($) {
            "use strict";
            window.addEventListener('scroll', function(){
              var header = document.querySelector('header');
              header.classList.toggle('sticky', window.scrollY > 0);
            });

            // Auto scroll services on mobile
            function autoScrollServices() {
                var $grid = $('.services-mlm-grid');
                if ($grid.length === 0) return;
                
                var scrollInterval = 3000; // 3 seconds
                var cardGap = 15;
                
                setInterval(function() {
                    if ($(window).width() > 768) return; // Only scroll on mobile
                    
                    var currentScroll = $grid.scrollLeft();
                    var maxScroll = $grid[0].scrollWidth - $grid.outerWidth();
                    var cardWidth = $grid.find('.service-mlm-card').outerWidth() + cardGap;
                    
                    var nextScroll = currentScroll + cardWidth;
                    
                    if (nextScroll >= maxScroll + 5) {
                        nextScroll = 0; // Wrap back to start
                    }
                    
                    $grid.animate({ scrollLeft: nextScroll }, 600);
                }, scrollInterval);
            }
            autoScrollServices();
        })(jQuery);
    </script>
@endpush
