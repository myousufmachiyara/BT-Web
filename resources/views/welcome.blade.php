<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BillTrix — Customized Billing & Accounting Software</title>
    <link rel="stylesheet" href="{{ asset('css/billtrix.css') }}">
</head>
<body>
<div class="page-shell">

<div class="hero-backdrop">
    <x-navbar />
    <x-hero />
</div>

    <x-partners />
    <x-stats />
    <x-features />
    <x-steps />
    <x-mobile-promo />
    <x-cta-footer />

</div><!-- /.page-shell -->

    {{-- Analytics/event tracking hook, per spec section 11/12 --}}
    <script src="{{ asset('js/visitor-tracking.js') }}" defer></script>
</body>
</html>
