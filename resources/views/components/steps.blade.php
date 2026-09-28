{{--
    "How We Work" steps component
    Usage: <x-steps :steps="$steps" />
    $steps is optional; falls back to config('billtrix.steps')
--}}
@php
    $steps = $steps ?? config('billtrix.steps', []);
@endphp

<section id="process" class="steps-section">
    <span class="section-eyebrow section-eyebrow-dark">💧 How We Work?</span>
    <h2 class="section-title section-title-light">Get Started in Just a Few Steps</h2>
    <p class="section-subtitle section-subtitle-light">
        From understanding your business to delivering a fully customized system, we make sure
        BillTrix fits your workflow perfectly and runs smoothly from day one.
    </p>

    <div class="steps-row">
        @foreach ($steps as $index => $step)
            <div class="step-item {{ $index === 2 ? 'step-item-active' : '' }}">
                <div class="step-number">{{ sprintf('%02d', $index + 1) }}</div>
                <div class="step-label">{{ $step['icon'] }} {{ $step['label'] }}</div>
                <h3 class="step-title">{{ $step['title'] }}</h3>
                <p class="step-description">{{ $step['description'] }}</p>
            </div>
        @endforeach
    </div>
</section>
