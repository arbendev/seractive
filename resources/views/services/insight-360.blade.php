@extends('layouts.app')



@section('content')
<!-- ================= PAGE HERO ================= -->
<section class="page-hero">
  <div class="container-xl">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <span class="badge bg-green-soft text-primary-dark rounded-pill px-3 py-2 mb-4 border-0">
            Hourly · Daily · Predictive Reporting
        </span>
        <h1 class="display-5 mb-4">Insight 360</h1>
        <p class="lead text-light opacity-75 mb-4">
          A reporting and intelligence system that monitors your business continuously, generates multi-frequency reports,
          and delivers plain-language insights and suggested actions.
        </p>
        <div class="d-flex gap-3">
            <a href="{{ url('/services') }}" class="btn btn-outline-light">
                <i class="bi bi-arrow-left me-2"></i>Back to Services
            </a>
        </div>
      </div>
      <div class="col-lg-5 offset-lg-1 mt-5 mt-lg-0">
        <livewire:components.ai-audit-card />
      </div>
    </div>
  </div>
</section>


<!-- ================= OUTCOMES & REPLACEMENT ================= -->
<section class="py-5 bg-alt" style="background-color: var(--bg-alt);">
  <div class="container-xl py-5">
    <div class="row g-5">
      
      <!-- What it replaces -->
      <div class="col-lg-6">
        <h2 class="h3 fw-bold mb-4">What this replaces</h2>
        <p class="text-secondary mb-4">
          Insight 360 removes the need to manually assemble reports and interpret dashboards without context.
        </p>
        <div class="row g-3">
          <div class="col-md-6">
            <div class="capability-card h-100 p-4">
              <div class="fw-bold text-dark mb-2">Static dashboards</div>
              <div class="small text-secondary">Charts without narrative or action suggestions.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="capability-card h-100 p-4">
              <div class="fw-bold text-dark mb-2">Manual reporting</div>
              <div class="small text-secondary">Exporting, formatting, and copying data into summaries.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="capability-card h-100 p-4">
              <div class="fw-bold text-dark mb-2">Spreadsheet analysis</div>
              <div class="small text-secondary">Time spent searching for anomalies and correlations.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="capability-card h-100 p-4">
              <div class="fw-bold text-dark mb-2">Reactive decisions</div>
              <div class="small text-secondary">Issues discovered after spend and time are already lost.</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Outcomes -->
      <div class="col-lg-6">
        <div class="bg-white p-5 rounded-4 border h-100 shadow-sm">
          <h3 class="h4 fw-bold mb-4">The Outcomes</h3>
          <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
            <li class="d-flex align-items-start gap-3">
              <i class="bi bi-check-circle-fill text-primary mt-1"></i>
              <span class="text-secondary">Anomaly alerts before problems compound</span>
            </li>
            <li class="d-flex align-items-start gap-3">
              <i class="bi bi-check-circle-fill text-primary mt-1"></i>
              <span class="text-secondary">Daily executive summaries with priorities</span>
            </li>
            <li class="d-flex align-items-start gap-3">
              <i class="bi bi-check-circle-fill text-primary mt-1"></i>
              <span class="text-secondary">Weekly and monthly trend interpretation</span>
            </li>
            <li class="d-flex align-items-start gap-3">
              <i class="bi bi-check-circle-fill text-primary mt-1"></i>
              <span class="text-secondary">Predictive insights based on historical baselines</span>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ================= HOW IT WORKS ================= -->
<section class="py-5">
  <div class="container-xl py-5">
    <h2 class="h3 fw-bold mb-5 text-center">How it works</h2>
    <div class="row g-4">
      <div class="col-md-6 col-lg-3">
        <div class="capability-card h-100 p-4 border bg-alt">
          <div class="fw-bold text-dark mb-2">1. KPI Definition</div>
          <div class="small text-secondary">We establish the metrics that drive decisions and revenue.</div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="capability-card h-100 p-4 border bg-alt">
          <div class="fw-bold text-dark mb-2">2. Data Connections</div>
          <div class="small text-secondary">We connect analytics, ads, CRM, finance, and operational tools.</div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="capability-card h-100 p-4 border bg-alt">
          <div class="fw-bold text-dark mb-2">3. Intelligence Layer</div>
          <div class="small text-secondary">The system detects anomalies, trends, and correlations automatically.</div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="capability-card h-100 p-4 border bg-alt">
          <div class="fw-bold text-dark mb-2">4. Reports + Suggestions</div>
          <div class="small text-secondary">Reports deliver narrative summaries plus proposed next actions.</div>
        </div>
      </div>
    </div>

    <div class="my-5 border-top"></div>

    <div class="row g-5">
      <div class="col-lg-7">
        <h3 class="h5 fw-bold mb-4">What we need from you</h3>
        <div class="row g-3">
          <div class="col-md-6">
            <div class="p-4 border rounded-3 h-100">
              <div class="fw-bold text-dark mb-1">KPI list</div>
              <div class="small text-secondary">What you actually want to track and act on.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-4 border rounded-3 h-100">
              <div class="fw-bold text-dark mb-1">Tool access</div>
              <div class="small text-secondary">Read-only API keys or credentials where available.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-4 border rounded-3 h-100">
              <div class="fw-bold text-dark mb-1">Historical data</div>
              <div class="small text-secondary">6–12 months recommended to establish baselines.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-4 border rounded-3 h-100">
              <div class="fw-bold text-dark mb-1">Report preferences</div>
              <div class="small text-secondary">Where summaries should go: email, Slack, dashboard.</div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-5">
        <div class="bg-alt p-5 rounded-4 h-100">
          <h3 class="h5 fw-bold mb-3">Common data sources</h3>
          <p class="small text-secondary mb-4">We connect to your existing tools.</p>
          <div class="d-flex flex-wrap gap-2">
            <span class="badge bg-white text-secondary border fw-normal px-3 py-2">GA4</span>
            <span class="badge bg-white text-secondary border fw-normal px-3 py-2">Google Ads</span>
            <span class="badge bg-white text-secondary border fw-normal px-3 py-2">Meta Ads</span>
            <span class="badge bg-white text-secondary border fw-normal px-3 py-2">Stripe</span>
            <span class="badge bg-white text-secondary border fw-normal px-3 py-2">QuickBooks</span>
            <span class="badge bg-white text-secondary border fw-normal px-3 py-2">HubSpot</span>
            <span class="badge bg-white text-secondary border fw-normal px-3 py-2">Shopify</span>
            <span class="badge bg-white text-secondary border fw-normal px-3 py-2">Search Console</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ================= FAQ ================= -->
<section class="py-5 bg-light">
  <div class="container-xl py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h2 class="h3 fw-bold mb-4 text-center">Frequently Asked Questions</h2>
            <div class="accordion shadow-sm" id="faq-i360">
            <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="i1">
                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#ic1">
                    Is the reporting accurate or “AI guessed”?
                </button>
                </h2>
                <div id="ic1" class="accordion-collapse collapse show" data-bs-parent="#faq-i360">
                <div class="accordion-body text-secondary">
                    Numbers come from deterministic queries and calculations. AI is used for interpretation and narrative summaries.
                </div>
                </div>
            </div>

            <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="i2">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#ic2">
                    Can we get alerts in real time?
                </button>
                </h2>
                <div id="ic2" class="accordion-collapse collapse" data-bs-parent="#faq-i360">
                <div class="accordion-body text-secondary">
                    Yes. Alerts can be delivered hourly (or faster) to email, Slack, or SMS depending on your stack.
                </div>
                </div>
            </div>

            <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="i3">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#ic3">
                    Can we ask questions in plain English?
                </button>
                </h2>
                <div id="ic3" class="accordion-collapse collapse" data-bs-parent="#faq-i360">
                <div class="accordion-body text-secondary">
                    Yes. A conversational layer can be added to query your KPIs and get immediate answers with sources.
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
  </div>
</section>

<!-- ================= CTA ================= -->
<section class="bg-primary py-5">
  <div class="container-xl text-center py-5">
    <div class="col-lg-8 mx-auto text-white">
        <h2 class="display-5 fw-bold mb-4">
        Deploy reporting that suggests actions
        </h2>
        <p class="lead mb-5 opacity-75">
            We’ll connect sources, define KPIs, and deliver multi-frequency summaries.
        </p>
        <a href="{{ url('/contact') }}" class="btn btn-light btn-lg fw-bold text-primary px-5">Let’s talk</a>
    </div>
  </div>
</section>
@endsection
