{{--
    Features component
    Usage: <x-features :items="$items" />
    $items is optional; falls back to config('billtrix.features')
--}}
@php
    $items = $items ?? config('billtrix.features', []);
@endphp

<section id="features" class="features-section">
    <span class="section-eyebrow">💧 Features</span>
    <h2 class="section-title">
        Customized Modules Built for <span class="text-accent">Your Business</span>
    </h2>
    <p class="section-subtitle">
        From billing and inventory to accounting and reports, BillTrix connects
        everything so you can scale your business
    </p>

    <div class="features-grid">
        @foreach ($items as $item)
            <div class="feature-card">
                <div class="feature-icon">📋</div>
                <h3>{{ $item['title'] }}</h3>
                <p>{{ $item['description'] }}</p>
                <ul class="feature-list">
                    @foreach ($item['points'] as $point)
                        <li>&rarr; {{ $point }}</li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
</section>
