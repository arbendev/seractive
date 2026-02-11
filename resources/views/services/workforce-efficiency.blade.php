@extends('layouts.app')



@section('content')
<!-- ================= PAGE HERO ================= -->
<section class="page-hero">
  <div class="container-xl">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <span class="badge bg-green-soft text-primary-dark rounded-pill px-3 py-2 mb-4 border-0">
            Labor Reduction · Automation · AI Audits
        </span>
        <h1 class="display-5 mb-4">Workforce Efficiency Architect</h1>
        <p class="lead text-light opacity-75 mb-4">
          A consultancy-first engagement that identifies repeatable tasks, measures their cost,
          and replaces them with agentic AI workflows.
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
@include('components.breadcrumbs', ['style' => 'background-color: var(--bg-alt);'])

<!-- ================= OUTCOMES & REPLACEMENT ================= -->
<section class="pt-0 pb-5 bg-alt" style="background-color: var(--bg-alt);">
  <div class="container-xl py-5">
    <div class="row g-5">
      
      <!-- What it replaces -->
      <div class="col-lg-6">
        <h2 class="h3 fw-bold mb-4">What this replaces</h2>
        <p class="text-secondary mb-4">
          This service replaces generalized consulting and manual process management with specific,
          code-based automation.
        </p>
        <div class="row g-3">
          <div class="col-md-6">
            <div class="capability-card h-100 p-4">
              <div class="fw-bold text-dark mb-2">Ops Managers</div>
              <div class="small text-secondary">Focus shifts from enforcement to strategy.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="capability-card h-100 p-4">
              <div class="fw-bold text-dark mb-2">Manual entry</div>
              <div class="small text-secondary">Data transfer between systems without APIs.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="capability-card h-100 p-4">
              <div class="fw-bold text-dark mb-2">SOP enforcement</div>
              <div class="small text-secondary">Replacing human checklists with code.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="capability-card h-100 p-4">
              <div class="fw-bold text-dark mb-2">Vendor coordination</div>
              <div class="small text-secondary">Automating logistics and scheduling.</div>
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
              <span class="text-secondary">Reduced headcount requirement for scaling</span>
            </li>
            <li class="d-flex align-items-start gap-3">
              <i class="bi bi-check-circle-fill text-primary mt-1"></i>
              <span class="text-secondary">Standardized output quality (zero human error)</span>
            </li>
            <li class="d-flex align-items-start gap-3">
              <i class="bi bi-check-circle-fill text-primary mt-1"></i>
              <span class="text-secondary">Documented and code-enforced processes</span>
            </li>
            <li class="d-flex align-items-start gap-3">
              <i class="bi bi-check-circle-fill text-primary mt-1"></i>
              <span class="text-secondary">Measurable ROI per workflow</span>
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
          <div class="fw-bold text-dark mb-2">1. Discovery Audit</div>
          <div class="small text-secondary">We interview team leads to find where time is actually going.</div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="capability-card h-100 p-4 border bg-alt">
          <div class="fw-bold text-dark mb-2">2. Workflow Mapping</div>
          <div class="small text-secondary">We document the "Golden Path" and exception cases for each task.</div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="capability-card h-100 p-4 border bg-alt">
          <div class="fw-bold text-dark mb-2">3. Automation Build</div>
          <div class="small text-secondary">We write the code (agents, scripts, API glues) to execute the task.</div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="capability-card h-100 p-4 border bg-alt">
          <div class="fw-bold text-dark mb-2">4. Handoff + Training</div>
          <div class="small text-secondary">We deploy the system and train your team on how to oversee it.</div>
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
              <div class="fw-bold text-dark mb-1">Access to teams</div>
              <div class="small text-secondary">Interviews with the people doing the work today.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-4 border rounded-3 h-100">
              <div class="fw-bold text-dark mb-1">Honest data</div>
              <div class="small text-secondary">Real talk about costs, errors, and bottlenecks.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-4 border rounded-3 h-100">
              <div class="fw-bold text-dark mb-1">SOPs (if any)</div>
              <div class="small text-secondary">Existing documentation, checklists, or Loom videos.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-4 border rounded-3 h-100">
              <div class="fw-bold text-dark mb-1">Deployment environment</div>
              <div class="small text-secondary">Where the automation will live (cloud, on-prem, etc).</div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-5">
        <div class="bg-alt p-5 rounded-4 h-100">
          <h3 class="h5 fw-bold mb-3">Tools we automate</h3>
          <p class="small text-secondary mb-4">We connect anything with an API (and some things without).</p>
          <div class="d-flex flex-wrap gap-2">
            <span class="badge bg-white text-secondary border fw-normal px-3 py-2">Spreadsheets</span>
            <span class="badge bg-white text-secondary border fw-normal px-3 py-2">Email</span>
            <span class="badge bg-white text-secondary border fw-normal px-3 py-2">ERP Systems</span>
            <span class="badge bg-white text-secondary border fw-normal px-3 py-2">Project Management</span>
            <span class="badge bg-white text-secondary border fw-normal px-3 py-2">Databases</span>
            <span class="badge bg-white text-secondary border fw-normal px-3 py-2">Document Clouds</span>
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
            <div class="accordion shadow-sm" id="faq-we">
            <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="we1">
                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#wec1">
                    Does this mean firing people?
                </button>
                </h2>
                <div id="wec1" class="accordion-collapse collapse show" data-bs-parent="#faq-we">
                <div class="accordion-body text-secondary">
                    Usually it means freezing hiring while growing revenue. Current staff often move to higher-value strategy or oversight roles.
                </div>
                </div>
            </div>

            <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="we2">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#wec2">
                    What if the process changes?
                </button>
                </h2>
                <div id="wec2" class="accordion-collapse collapse" data-bs-parent="#faq-we">
                <div class="accordion-body text-secondary">
                    The automation is modular code, not a black box. We can update logic or train your team to adjust parameters.
                </div>
                </div>
            </div>

            <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="we3">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#wec3">
                    Is there a minimum size for this?
                </button>
                </h2>
                <div id="wec3" class="accordion-collapse collapse" data-bs-parent="#faq-we">
                <div class="accordion-body text-secondary">
                    We typically look for workflows consuming at least 20 hours/week of human time to ensure ROI.
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
    title="Stop paying humans to act like robots" 
    text="We’ll identify your most expensive manual loops and code them away." 
    buttonText="Get an audit"
/>
@endsection
