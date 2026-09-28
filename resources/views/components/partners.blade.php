{{--
    Partners component
    Usage: <x-partners :logos="$logos" />
    $logos is optional; falls back to config('billtrix.partners')
--}}
@php
    $logos = $logos ?? config('billtrix.partners', []);
@endphp

<section class="partners-section">
    <span class="section-eyebrow">💧 Our Partners</span>
    <h2 class="section-title">
        Explore Our Trusted <span class="text-accent">Partners</span>
    </h2>
    <p class="section-subtitle">
        Businesses trust BillTrix to simplify billing and stay in control.
    </p>

    <div class="partners-strip">
        @foreach ($logos as $logo)
            <div class="partner-logo">
                <img src="{{ asset($logo['image']) }}" alt="{{ $logo['name'] }}">
            </div>
        @endforeach
    </div>
</section>
