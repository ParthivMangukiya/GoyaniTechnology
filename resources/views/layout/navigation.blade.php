
<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="fa fa-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=info@lemonimpexhk.com" target="_blank"><i class="mr-2 fa fa-envelope-o"></i> <span class="d-none d-md-inline-block">info@lemonimpexhk.com</span></a>
                <span class="mx-md-2 d-inline-block"></span>
                <a href="tel://+85256163534" class=""><i class="mr-2 fa fa-phone"></i><span class="d-none d-md-inline-block">(+852) 5616 3534</span></a>
                <div class="float-right">
                <a href="https://www.instagram.com/lemonimpex/" target="_blank" ><i class="fa fa-instagram"></i> <span class="d-none d-md-inline-block">lemonimpex</span></a>
                {{-- <span class="mx-md-2 d-inline-block"></span> --}}
                {{-- <a href="#" class=""><i class="mr-2 fa fa-facebook"></i> <span class="d-none d-md-inline-block">Facebook</span></a> --}}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sticky-top site-navbar site-navbar-target  d-flex align-items-center nav-top">
    <div class="container">
        <div class="row mx-2 align-items-center position-relative">
        <div class="site-logo">
            <a href="index.php"><img class="img-fluid" width="150px" src="{{ asset('images/logo_eps.png')}}" alt="Lemon Impex"></a>
        </div>
        <div class="col-12">
            <nav class="site-navigation text-right ml-auto " role="navigation">
            <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                    <li><a class="{{active('home')}} nav-link" class="nav-link" href="{{route('home')}}">Home</a></li>
                    <li><a class="{{active('whyus')}} nav-link" href="{{route('whyus')}}">Why Us</a></li>
                    <li><a class="{{active('diamonds')}} nav-link" href="{{route('diamonds')}}">Inventory</a></li>
                    <li><a class="{{active('events')}} nav-link" href="{{route('events')}}">Events</a></li>
                    <li><a class="{{active('contact')}} nav-link" href="{{route('contact')}}">Contact Us</a></li>
                    {{-- <li><a class="{{active('cart')}} nav-link" href="{{route('cart')}}"><cart-count></cart-count></a></li> --}}
            </ul>
            </nav>
        </div>
        <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle"><i class="fa fa-bars h3"></i></a></div>
        </div>
    </div>
</div>