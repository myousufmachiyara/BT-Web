{{--
    Hero component
    Usage: <x-hero />
--}}
<section id="home" class="hero-section">
    <div class="hero-bg-shapes" aria-hidden="true">
        <span class="shape shape-diamond shape-diamond-1"></span>
        <span class="shape shape-diamond shape-diamond-2"></span>
        <span class="shape shape-dot shape-dot-1"></span>
        <span class="shape shape-dot shape-dot-2"></span>
        <span class="shape shape-dot shape-dot-3"></span>
        <span class="shape shape-dot shape-dot-4"></span>
    </div>

    <div class="hero-floating-icon hero-icon-tl">
        <svg viewBox="0 0 24 24" fill="none"><path d="M4 20V10M10 20V4M16 20V13M22 20V7" stroke="#2947a3" stroke-width="2.4" stroke-linecap="round"/></svg>
    </div>
    <div class="hero-floating-icon hero-icon-bl">
        <svg viewBox="0 0 24 24" fill="none"><rect x="3" y="3" width="18" height="18" rx="2" stroke="#2947a3" stroke-width="2"/><path d="M7 9h10M7 13h6M15 17l2 2 3-3" stroke="#2947a3" stroke-width="2" stroke-linecap="round"/></svg>
    </div>
    <div class="hero-floating-icon hero-icon-tr">
        <svg viewBox="0 0 24 24" fill="none"><path d="M6 3h12v18H6z" stroke="#2947a3" stroke-width="2"/><path d="M9 8h6M9 12h6M9 16h3" stroke="#2947a3" stroke-width="2" stroke-linecap="round"/><circle cx="16" cy="17" r="3" fill="#2947a3"/><path d="M14.6 17l1 1 1.8-1.8" stroke="#fff" stroke-width="1.4" stroke-linecap="round"/></svg>
    </div>
    <div class="hero-floating-icon hero-icon-br">
        <svg viewBox="0 0 24 24" fill="none"><rect x="2" y="4" width="20" height="13" rx="1.5" stroke="#2947a3" stroke-width="2"/><path d="M8 21h8M12 17v4" stroke="#2947a3" stroke-width="2" stroke-linecap="round"/></svg>
    </div>

    <div class="hero-inner">
        <h1 class="hero-title">
            Customized Billing &amp; Accounting<br>
            Software Fit For Your Business
        </h1>

        <p class="hero-subtitle">
            Manage your sales, purchases, payments, and ledgers in one
            place with a system designed to simplify daily operations and give
            you complete financial clarity.
        </p>

        <div class="hero-cta-row">
            <a href="{{ config('billtrix.demo_url', '#') }}" class="btn btn-white">
                <span>Start Free</span>
                <span class="btn-arrow-box">&raquo;</span>
            </a>
            <a href="{{ config('billtrix.live_demo_url', '#') }}" class="btn btn-text-light">
                Live Demo <span class="btn-arrow-plain">&raquo;</span>
            </a>
        </div>

        <ul class="hero-checklist">
            <li><span class="check-circle">&#10003;</span> Customized for You</li>
            <li><span class="check-circle">&#10003;</span> Easy to Get Started</li>
            <li><span class="check-circle">&#10003;</span> Real-Time Reports</li>
        </ul>
    </div>
</section>
