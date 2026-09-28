{{--
    Final CTA + Footer component
    Usage: <x-cta-footer />
--}}
<section class="final-cta-section">
    <span class="section-eyebrow">💧 Ready To Start?</span>
    <h2 class="section-title">
        Customized Billing &amp; <span class="text-accent">Accounting Software</span>
    </h2>
    <p class="section-subtitle">
        Manage sales, purchases, payments, and ledgers in one smart system, built
        to simplify daily operations and give you complete financial clarity.
    </p>
    <a href="{{ config('billtrix.demo_url', '#') }}" class="btn btn-primary">
        Get Started <span class="btn-arrow-box">&raquo;</span>
    </a>
</section>

<footer class="site-footer">
    <div class="footer-grid">
        <div class="footer-brand">
            <div class="navbar-logo">BILLTRI<span class="logo-accent">X</span></div>
            <p>
                Manage your sales, purchases, payments, and ledgers in one place, with a
                system designed to simplify daily operations and give you complete
                financial clarity.
            </p>
            <div class="footer-socials">
                <a href="{{ config('billtrix.facebook_url', '#') }}" aria-label="Facebook">f</a>
                <a href="{{ config('billtrix.instagram_url', '#') }}" aria-label="Instagram">ig</a>
            </div>
        </div>

        <div class="footer-links">
            <h4>Our Company</h4>
            <a href="#about">About Us</a>
            <a href="#features">Our Features</a>
            <a href="#process">Our Process</a>
        </div>

        <div class="footer-links">
            <h4>Useful Links</h4>
            <a href="{{ url('/privacy-policy') }}">Privacy Policy</a>
            <a href="{{ url('/terms') }}">Terms &amp; Condition</a>
            <a href="{{ url('/cookie-policy') }}">Cookie Policy</a>
        </div>

        <div class="footer-newsletter">
            <h4>Subscribe Our Newsletter</h4>
            <form action="{{ route('newsletter.subscribe') ?? '#' }}" method="POST" class="newsletter-form">
                @csrf
                <input type="email" name="email" placeholder="Your Email Address" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </div>

    <div class="footer-bottom">
        &copy; {{ date('Y') }} Billtrix. All rights reserved
    </div>
</footer>
