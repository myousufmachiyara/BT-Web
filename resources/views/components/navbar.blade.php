{{--
    Navbar component
    Usage: <x-navbar />
--}}
<header class="site-navbar">
    <div class="navbar-inner">
        <a href="{{ url('/') }}" class="navbar-logo">
            BILLTRI<span class="logo-accent">X</span>
        </a>

        <nav class="navbar-links">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#features">Features</a>
            <a href="#process">Process</a>
        </nav>

        <a href="{{ config('billtrix.demo_url', '#') }}" class="btn btn-navbar">
            <span>Free Demo</span>
            <span class="btn-arrow-box">&raquo;</span>
        </a>
    </div>
</header>
