@extends('layouts.app')



@section('content')
<!-- ================= PAGE HERO ================= -->
<section class="page-hero">
  <div class="container-xl">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <span class="badge bg-green-soft text-primary-dark rounded-pill px-3 py-2 mb-4 border-0">
            SEO · Social · Email Automation
        </span>
        <h1 class="display-5 mb-4">Autonomic Marketing Hub</h1>
        <p class="lead text-light opacity-75 mb-4">
          A custom AI content system that researches, writes, repurposes, and distributions marketing output on a schedule —
          aligned to your brand voice and business goals.
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
          One system replaces fragmented content operations and repetitive drafting cycles, allowing your team to focus on strategy.
        </p>
        <div class="row g-3">
          <div class="col-md-6">
            <div class="capability-card h-100 p-4">
              <div class="fw-bold text-dark mb-2">Manual drafting</div>
              <div class="small text-secondary">Blogs, captions, and newsletters created from scratch each time.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="capability-card h-100 p-4">
              <div class="fw-bold text-dark mb-2">Inconsistent cadence</div>
              <div class="small text-secondary">Posting slows when the team gets busy and priorities shift.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="capability-card h-100 p-4">
              <div class="fw-bold text-dark mb-2">Agency dependency</div>
              <div class="small text-secondary">Recurring retainers without a reusable internal system or asset.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="capability-card h-100 p-4">
              <div class="fw-bold text-dark mb-2">Channel silos</div>
              <div class="small text-secondary">SEO, social, and email managed separately with no shared source of truth.</div>
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
              <span class="text-secondary">Consistent publishing schedule without manual effort</span>
            </li>
            <li class="d-flex align-items-start gap-3">
              <i class="bi bi-check-circle-fill text-primary mt-1"></i>
              <span class="text-secondary">Unified brand voice across SEO, social, and email channels</span>
            </li>
            <li class="d-flex align-items-start gap-3">
              <i class="bi bi-check-circle-fill text-primary mt-1"></i>
              <span class="text-secondary">Reduced marketing labor cost for drafting, editing, and repurposing</span>
            </li>
            <li class="d-flex align-items-start gap-3">
              <i class="bi bi-check-circle-fill text-primary mt-1"></i>
              <span class="text-secondary">Approval-first workflow to prevent unwanted publishing</span>
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
          <div class="fw-bold text-dark mb-2">1. Brand Voice Modeling</div>
          <div class="small text-secondary">We train the system on your examples, terminology, positioning, and formatting preferences.</div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="capability-card h-100 p-4 border bg-alt">
          <div class="fw-bold text-dark mb-2">2. Trend Intelligence</div>
          <div class="small text-secondary">Topic discovery based on search intent, competitors, and industry activity to ensure relevance.</div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="capability-card h-100 p-4 border bg-alt">
          <div class="fw-bold text-dark mb-2">3. Content Pipeline</div>
          <div class="small text-secondary">Long-form source content generates derivative assets for social and email automatically.</div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="capability-card h-100 p-4 border bg-alt">
          <div class="fw-bold text-dark mb-2">4. Approval + Publish</div>
          <div class="small text-secondary">Everything enters an approval queue. Approved items publish on schedule. You retain full control.</div>
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
              <div class="fw-bold text-dark mb-1">Content examples</div>
              <div class="small text-secondary">10–20 samples: blogs, emails, sales pages, posts.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-4 border rounded-3 h-100">
              <div class="fw-bold text-dark mb-1">Audience definition</div>
              <div class="small text-secondary">Who you sell to and what problems you solve.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-4 border rounded-3 h-100">
              <div class="fw-bold text-dark mb-1">Publishing targets</div>
              <div class="small text-secondary">Cadence (weekly/monthly), channels, approvals.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-4 border rounded-3 h-100">
              <div class="fw-bold text-dark mb-1">Platform access</div>
              <div class="small text-secondary">CMS + email platform + social access (or API keys).</div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-5">
        <div class="bg-alt p-5 rounded-4 h-100">
          <h3 class="h5 fw-bold mb-3">Common integrations</h3>
          <p class="small text-secondary mb-4">We connect to your existing tools. No platform rewrite required.</p>
          <div class="d-flex flex-wrap gap-2">
            <span class="badge bg-white text-secondary border fw-normal px-3 py-2">WordPress</span>
            <span class="badge bg-white text-secondary border fw-normal px-3 py-2">Webflow</span>
            <span class="badge bg-white text-secondary border fw-normal px-3 py-2">Shopify</span>
            <span class="badge bg-white text-secondary border fw-normal px-3 py-2">Mailchimp</span>
            <span class="badge bg-white text-secondary border fw-normal px-3 py-2">Klaviyo</span>
            <span class="badge bg-white text-secondary border fw-normal px-3 py-2">HubSpot</span>
            <span class="badge bg-white text-secondary border fw-normal px-3 py-2">Buffer</span>
            <span class="badge bg-white text-secondary border fw-normal px-3 py-2">LinkedIn</span>
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
            <div class="accordion shadow-sm" id="faq-am">
            <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="am1">
                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#amc1">
                    Is this generic AI content?
                </button>
                </h2>
                <div id="amc1" class="accordion-collapse collapse show" data-bs-parent="#faq-am">
                <div class="accordion-body text-secondary">
                    No. The system is trained on your examples and constrained by your brand rules and approved sources. It produces content that sounds like you, not a generic robot.
                </div>
                </div>
            </div>

            <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="am2">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#amc2">
                    Can we control frequency and approvals?
                </button>
                </h2>
                <div id="amc2" class="accordion-collapse collapse" data-bs-parent="#faq-am">
                <div class="accordion-body text-secondary">
                    Yes. Cadence is configurable per channel, and publishing can be fully approval-gated. Nothing goes live without your team saying "go" if you prefer.
                </div>
                </div>
            </div>

            <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="am3">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#amc3">
                    Does this replace a marketing team?
                </button>
                </h2>
                <div id="amc3" class="accordion-collapse collapse" data-bs-parent="#faq-am">
                <div class="accordion-body text-secondary">
                    It replaces repetitive drafting, repurposing, and scheduling. Strategy and final approvals remain yours. It frees your team to focus on creative strategy rather than grinding out posts.
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
        Build an automated marketing engine
        </h2>
        <p class="lead mb-5 opacity-75">
            We’ll map your content workflow, integrations, cadence, and approval gates.
        </p>
        <a href="{{ url('/contact') }}" class="btn btn-light btn-lg fw-bold text-primary px-5">Let’s talk</a>
    </div>
  </div>
</section>
@endsection
