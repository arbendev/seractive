@extends('layouts.app')



@section('content')
<!-- ================= PAGE HERO ================= -->
<section class="page-hero">
  <div class="container-xl">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <span class="badge bg-green-soft text-primary-dark rounded-pill px-3 py-2 mb-4 border-0">
            Lead Capture · Qualification · Onboarding
        </span>
        <h1 class="display-5 mb-4">24/7 Growth Concierge</h1>
        <p class="lead text-light opacity-75 mb-4">
          Replace contact forms with a custom AI intake agent that engages every prospect instantly,
          qualifies fit, answers objections from approved sources, and starts onboarding automatically.
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
@include('components.breadcrumbs', ['class' => 'bg-alt'])

<!-- ================= OUTCOMES & REPLACEMENT ================= -->
<section class="pt-0 pb-5 bg-alt">
  <div class="container-xl py-5">
    <div class="row g-5">
      
      <!-- What it replaces -->
      <div class="col-lg-6">
        <h2 class="h3 fw-bold mb-4">What this replaces</h2>
        <p class="text-secondary mb-4">
          The concierge eliminates the delay between interest and response — and removes repetitive human qualification.
        </p>
        <div class="row g-3">
          <div class="col-md-6">
            <div class="capability-card h-100 p-4">
              <div class="fw-bold text-dark mb-2">Contact forms</div>
              <div class="small text-secondary">Static submission → delayed response.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="capability-card h-100 p-4">
              <div class="fw-bold text-dark mb-2">Inbox triage</div>
              <div class="small text-secondary">Manual sorting + chasing basic details.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="capability-card h-100 p-4">
              <div class="fw-bold text-dark mb-2">Repeated FAQs</div>
              <div class="small text-secondary">Same answers typed by humans every day.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="capability-card h-100 p-4">
              <div class="fw-bold text-dark mb-2">Unqualified calls</div>
              <div class="small text-secondary">Meetings with poor-fit prospects.</div>
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
              <span class="text-secondary">Instant lead engagement (24/7)</span>
            </li>
            <li class="d-flex align-items-start gap-3">
              <i class="bi bi-check-circle-fill text-primary mt-1"></i>
              <span class="text-secondary">Qualification based on your criteria</span>
            </li>
            <li class="d-flex align-items-start gap-3">
              <i class="bi bi-check-circle-fill text-primary mt-1"></i>
              <span class="text-secondary">Higher conversion due to speed-to-lead</span>
            </li>
            <li class="d-flex align-items-start gap-3">
              <i class="bi bi-check-circle-fill text-primary mt-1"></i>
              <span class="text-secondary">Automatic booking + onboarding kickoff data</span>
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
          <div class="fw-bold text-dark mb-2">1. Engagement</div>
          <div class="small text-secondary">Conversation starts with high-signal questions based on your service type.</div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="capability-card h-100 p-4 border bg-alt">
          <div class="fw-bold text-dark mb-2">2. Knowledge Retrieval</div>
          <div class="small text-secondary">Answers using approved documents and defined pricing rules.</div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="capability-card h-100 p-4 border bg-alt">
          <div class="fw-bold text-dark mb-2">3. Qualification Logic</div>
          <div class="small text-secondary">Filters leads by fit, budget range, timeline, and intent.</div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="capability-card h-100 p-4 border bg-alt">
          <div class="fw-bold text-dark mb-2">4. Onboarding Actions</div>
          <div class="small text-secondary">Books calls, captures details, and syncs to CRM + notifications.</div>
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
              <div class="fw-bold text-dark mb-1">Qualification criteria</div>
              <div class="small text-secondary">The 3–7 questions that define a qualified lead.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-4 border rounded-3 h-100">
              <div class="fw-bold text-dark mb-1">Pricing + boundaries</div>
              <div class="small text-secondary">Ranges the agent can share + what must be escalated.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-4 border rounded-3 h-100">
              <div class="fw-bold text-dark mb-1">Approved knowledge</div>
              <div class="small text-secondary">FAQs, proposals, service docs, policies, onboarding steps.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-4 border rounded-3 h-100">
              <div class="fw-bold text-dark mb-1">Integrations</div>
              <div class="small text-secondary">Calendar + CRM + notifications (email/Slack/SMS).</div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-5">
        <div class="bg-alt p-5 rounded-4 h-100">
          <h3 class="h5 fw-bold mb-3">Channels</h3>
          <p class="small text-secondary mb-4">Deploy on web first, then expand.</p>
          <div class="d-flex flex-wrap gap-2">
            <span class="badge bg-white text-secondary border fw-normal px-3 py-2">Website Widget</span>
            <span class="badge bg-white text-secondary border fw-normal px-3 py-2">SMS</span>
            <span class="badge bg-white text-secondary border fw-normal px-3 py-2">WhatsApp</span>
            <span class="badge bg-white text-secondary border fw-normal px-3 py-2">Email Intake</span>
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
            <div class="accordion shadow-sm" id="faq-gc">
            <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="gc1">
                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#gcc1">
                    Can it give incorrect pricing or answers?
                </button>
                </h2>
                <div id="gcc1" class="accordion-collapse collapse show" data-bs-parent="#faq-gc">
                <div class="accordion-body text-secondary">
                    The agent is constrained by approved sources and defined rules. Unknowns are escalated to a human.
                </div>
                </div>
            </div>

            <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="gc2">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#gcc2">
                    Can humans intervene?
                </button>
                </h2>
                <div id="gcc2" class="accordion-collapse collapse" data-bs-parent="#faq-gc">
                <div class="accordion-body text-secondary">
                    Yes. You can add a live handoff, internal alerts, and an approval step before any outbound actions.
                </div>
                </div>
            </div>

            <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="gc3">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#gcc3">
                    Can it support multiple languages?
                </button>
                </h2>
                <div id="gcc3" class="accordion-collapse collapse" data-bs-parent="#faq-gc">
                <div class="accordion-body text-secondary">
                    Yes. Language detection and multilingual responses can be enabled by default.
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
  </div>
</section>

<!-- ================= CTA ================= -->
<livewire:components.call-to-action 
    title="Deploy an intake agent that never sleeps" 
    text="We’ll define qualification logic, approved knowledge, and onboarding actions." 
/>
@endsection
