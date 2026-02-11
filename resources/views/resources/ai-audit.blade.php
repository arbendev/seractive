@extends('layouts.app')

@section('content')
<!-- ================= HERO ================= -->
<section class="page-hero">
  <div class="container-xl">
    <div class="row">
      <div class="col-lg-9">
        <h1 class="display-5 mb-4">AI Architecture Audit</h1>
        <p class="lead text-light opacity-75">
          A structured evaluation of where AI fits in your organization,
          what should be automated, and where human oversight is mandatory.
        </p>
      </div>
    </div>
  </div>
</section>
@include('components.breadcrumbs')

<!-- ================= WHY AUDIT ================= -->
<section class="pt-0 pb-5">
  <div class="container-xl py-5">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6">
        <h2 class="h3 fw-bold mb-4">Why an audit comes first</h2>
        <p class="text-secondary mb-4">
          Most AI initiatives fail because automation is applied too early,
          in the wrong place, or without controls.
        </p>
        <p class="text-secondary mb-4">
          The AI Architecture Audit prevents wasted spend by determining:
        </p>
        <ul class="list-unstyled text-secondary mb-0 d-flex flex-column gap-2">
          <li class="d-flex align-items-center gap-2"><i class="bi bi-check2 text-primary"></i> Which workflows are safe to automate</li>
          <li class="d-flex align-items-center gap-2"><i class="bi bi-check2 text-primary"></i> Which require human-in-the-loop oversight</li>
          <li class="d-flex align-items-center gap-2"><i class="bi bi-check2 text-primary"></i> What data is usable — and what is not</li>
          <li class="d-flex align-items-center gap-2"><i class="bi bi-check2 text-primary"></i> Where AI would introduce unacceptable risk</li>
        </ul>
      </div>

      <div class="col-lg-6">
        <div class="capability-card p-5 border bg-light">
          <h5 class="fw-bold mb-4 text-dark">This audit is not for</h5>
          <ul class="list-unstyled text-secondary mb-0 d-flex flex-column gap-3">
            <li class="d-flex align-items-center gap-3">
                <i class="bi bi-x-circle text-danger"></i> Buying AI tools “just to try them”
            </li>
            <li class="d-flex align-items-center gap-3">
                <i class="bi bi-x-circle text-danger"></i> Replacing judgment-heavy roles
            </li>
            <li class="d-flex align-items-center gap-3">
                <i class="bi bi-x-circle text-danger"></i> Deploying black-box automation
            </li>
            <li class="d-flex align-items-center gap-3">
                <i class="bi bi-x-circle text-danger"></i> Skipping governance and controls
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ================= WHAT WE EVALUATE ================= -->
<section class="py-5 bg-alt" style="background-color: var(--bg-alt);">
  <div class="container-xl py-5">
    <h2 class="h3 fw-bold mb-5">What we evaluate</h2>

    <div class="row g-4">
      <div class="col-md-4">
        <div class="capability-card h-100">
           <div class="mb-3 text-primary"><i class="bi bi-diagram-2 fs-3"></i></div>
          <h5 class="fw-bold mb-3">Workflows</h5>
          <p class="text-secondary mb-0">
            Repetitive tasks, handoffs, delays, and failure points.
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="capability-card h-100">
           <div class="mb-3 text-primary"><i class="bi bi-database-check fs-3"></i></div>
          <h5 class="fw-bold mb-3">Data readiness</h5>
          <p class="text-secondary mb-0">
            Data quality, access, structure, and isolation constraints.
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="capability-card h-100">
           <div class="mb-3 text-primary"><i class="bi bi-shield-check fs-3"></i></div>
          <h5 class="fw-bold mb-3">Risk & governance</h5>
          <p class="text-secondary mb-0">
            Where automation must stop, escalate, or be reviewed.
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="capability-card h-100">
           <div class="mb-3 text-primary"><i class="bi bi-cash-stack fs-3"></i></div>
          <h5 class="fw-bold mb-3">Economic impact</h5>
          <p class="text-secondary mb-0">
            Labor cost recovery, throughput gains, and ROI.
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="capability-card h-100">
           <div class="mb-3 text-primary"><i class="bi bi-tools fs-3"></i></div>
          <h5 class="fw-bold mb-3">Tooling landscape</h5>
          <p class="text-secondary mb-0">
            Existing systems, integrations, and constraints.
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="capability-card h-100">
           <div class="mb-3 text-primary"><i class="bi bi-rocket-takeoff fs-3"></i></div>
          <h5 class="fw-bold mb-3">Deployment strategy</h5>
          <p class="text-secondary mb-0">
            Phased rollout plan with control points.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ================= PROCESS ================= -->
<section class="py-5">
  <div class="container-xl py-5">
    <h2 class="h3 fw-bold mb-5">How the audit works</h2>

    <div class="row g-4">
        <div class="col-md-3">
            <div class="step-card">
              <div class="text-primary fw-bold mb-2">Step 1</div>
              <h5 class="fw-bold mb-3">Discovery</h5>
              <p class="text-secondary mb-0">
                We review your workflows, tools, and objectives.
              </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="step-card">
              <div class="text-primary fw-bold mb-2">Step 2</div>
              <h5 class="fw-bold mb-3">Feasibility mapping</h5>
              <p class="text-secondary mb-0">
                Tasks are categorized by automation safety and complexity.
              </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="step-card">
              <div class="text-primary fw-bold mb-2">Step 3</div>
              <h5 class="fw-bold mb-3">Architecture outline</h5>
              <p class="text-secondary mb-0">
                We define where AI fits — and where it does not.
              </p>
            </div>
        </div>
         <div class="col-md-3">
            <div class="step-card">
              <div class="text-primary fw-bold mb-2">Step 4</div>
              <h5 class="fw-bold mb-3">Recommendations</h5>
              <p class="text-secondary mb-0">
                You receive a clear decision framework and next steps.
              </p>
            </div>
        </div>
    </div>
  </div>
</section>

<!-- ================= DELIVERABLES ================= -->
<section class="py-5 bg-light">
  <div class="container-xl py-5">
    <div class="row g-5 align-items-center">
      <div class="col-lg-7">
        <h2 class="h3 fw-bold mb-4">What you receive</h2>
        <ul class="list-unstyled text-secondary d-flex flex-column gap-3 mb-0">
          <li class="d-flex align-items-center gap-3">
            <i class="bi bi-check-circle-fill text-primary"></i> Workflow automation map
          </li>
          <li class="d-flex align-items-center gap-3">
            <i class="bi bi-check-circle-fill text-primary"></i> Risk & governance boundaries
          </li>
          <li class="d-flex align-items-center gap-3">
             <i class="bi bi-check-circle-fill text-primary"></i> AI feasibility assessment
          </li>
          <li class="d-flex align-items-center gap-3">
             <i class="bi bi-check-circle-fill text-primary"></i> Phased deployment roadmap
          </li>
          <li class="d-flex align-items-center gap-3">
             <i class="bi bi-check-circle-fill text-primary"></i> Clear recommendation: proceed or pause
          </li>
        </ul>
      </div>
      <div class="col-lg-5">
        <div class="capability-card p-5 border bg-white shadow-sm">
          <h5 class="fw-bold mb-3 text-dark">Outcome guarantee</h5>
          <p class="text-secondary mb-0">
            You will leave knowing whether AI is worth pursuing —
            and exactly why.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ================= CTA ================= -->
<section class="bg-primary py-5">
  <div class="container-xl text-center py-5">
    <div class="col-lg-8 mx-auto text-white">
        <h3 class="display-6 fw-bold mb-4">Start with clarity, not tools</h3>
        <p class="lead mb-5 opacity-75">
          Book an AI Architecture Audit.
        </p>
        <a href="{{ url('/contact') }}" class="btn btn-light btn-lg fw-bold text-primary px-5">Request audit</a>
    </div>
  </div>
</section>
@endsection
