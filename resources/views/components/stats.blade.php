{{--
    Stats + "Built for Your Business" component
    Usage: <x-stats />
--}}
<section class="stats-section">
    <div class="stats-visual">
        <div class="stats-card-purple">
            <div class="stats-score">65%</div>
            <div class="stats-score-label">Average Score<br>In Last 30 Days</div>
        </div>

        <div class="stats-card-white">
            <div class="stats-increase-label">Total Increase</div>
            <div class="stats-increase-value">450 <span class="stats-increase-pct">+12%</span></div>
            <div class="stats-mini-bars" aria-hidden="true">
                <span></span><span></span><span></span><span></span>
            </div>
            <div class="stats-pill-row">
                <span class="stats-pill stats-pill-down">⬇ Expenditure $11,000</span>
                <span class="stats-pill stats-pill-up">⬆ Income $21,000</span>
            </div>
        </div>

        <div class="stats-activities-card">
            <div class="stats-activities-header">
                <span>Activities</span>
                <select class="stats-year-select" disabled><option>Year</option></select>
            </div>
            <div class="stats-chart-placeholder" aria-hidden="true"></div>
        </div>
    </div>

    <div class="stats-content">
        <h2 class="section-title">Built for <span class="text-accent">Your Business</span></h2>
        <p class="stats-description">
            BillTrix is a complete billing management system that simplifies billing,
            inventory, and accounting, all in one place.
        </p>

        <div class="stats-feature-list">
            <div class="stats-feature-item">
                <div class="stats-feature-icon">🖱️</div>
                <div>
                    <h3>Simple &amp; Easy</h3>
                    <p>No accounting background needed. Start using it from day one.</p>
                </div>
            </div>
            <div class="stats-feature-item">
                <div class="stats-feature-icon">⚙️</div>
                <div>
                    <h3>Manage Everything</h3>
                    <p>Handle sales, purchases, payments, and ledgers without switching between tools.</p>
                </div>
            </div>
            <div class="stats-feature-item">
                <div class="stats-feature-icon">📈</div>
                <div>
                    <h3>Real-Time Reports</h3>
                    <p>Get clear financial data and make better business decisions instantly.</p>
                </div>
            </div>
        </div>

        <a href="{{ config('billtrix.demo_url', '#') }}" class="btn btn-primary">
            Get Free Demo <span class="btn-arrow-box">&raquo;</span>
        </a>
    </div>
</section>
