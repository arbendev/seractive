@extends('layouts.app')



@section('content')
<section class="page-hero">
  <div class="container-xl">
    <div class="row">
      <div class="col-lg-8">
        <h1 class="display-5 mb-4">We design AI systems for real work</h1>
        <p class="lead text-light opacity-75">
          Seractive exists to replace fragile, manual processes with AI architectures
          that are understandable, controllable, and economically justified.
        </p>
      </div>
    </div>
  </div>
</section>
@include('components.breadcrumbs')

<section class="pt-0 pb-5">
  <div class="container-xl py-5">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6">
        <h2 class="h3 fw-bold mb-4">Why Seractive exists</h2>
        <p class="text-secondary mb-4">
          Most AI initiatives fail not because the models are weak,
          but because the systems around them are poorly designed.
        </p>
        <p class="text-secondary mb-4">
          We saw organizations adopting AI as a feature — not as infrastructure —
          leading to unreliable outputs, governance issues, and wasted spend.
        </p>
        <p class="text-secondary mb-0">
          Seractive was formed to focus on architecture first:
          workflows, data boundaries, escalation paths, and human oversight.
        </p>
      </div>
      <div class="col-lg-6">
        <div class="capability-card p-5 border bg-light">
          <h5 class="fw-bold mb-4 text-dark">What we refuse to do</h5>
          <ul class="list-unstyled text-secondary mb-0 d-flex flex-column gap-3">
            <li class="d-flex align-items-center gap-3">
                <i class="bi bi-x-circle text-danger"></i> Deploy black-box AI without controls
            </li>
            <li class="d-flex align-items-center gap-3">
                <i class="bi bi-x-circle text-danger"></i> Sell generic SaaS templates
            </li>
            <li class="d-flex align-items-center gap-3">
                <i class="bi bi-x-circle text-danger"></i> Replace humans in critical decision loops
            </li>
            <li class="d-flex align-items-center gap-3">
                <i class="bi bi-x-circle text-danger"></i> Ship systems without accountability
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-alt" style="background-color: var(--bg-alt);">
  <div class="container-xl py-5">
    <h2 class="h3 fw-bold mb-5">Our design principles</h2>

    <div class="row g-4">
      <div class="col-md-4">
        <div class="capability-card h-100">
          <div class="mb-3 text-primary"><i class="bi bi-diagram-3 fs-3"></i></div>
          <h5 class="fw-bold mb-3">Architecture over prompts</h5>
          <p class="text-secondary mb-0">
            AI reliability comes from system design, not clever prompting.
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="capability-card h-100">
           <div class="mb-3 text-primary"><i class="bi bi-person-check fs-3"></i></div>
          <h5 class="fw-bold mb-3">Human-in-the-loop by default</h5>
          <p class="text-secondary mb-0">
            Critical outputs always include review, approval, or escalation.
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="capability-card h-100">
           <div class="mb-3 text-primary"><i class="bi bi-graph-up-arrow fs-3"></i></div>
          <h5 class="fw-bold mb-3">Economic justification</h5>
          <p class="text-secondary mb-0">
            Every system must measurably reduce cost or increase output.
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="capability-card h-100">
           <div class="mb-3 text-primary"><i class="bi bi-shield-lock fs-3"></i></div>
          <h5 class="fw-bold mb-3">Private data isolation</h5>
          <p class="text-secondary mb-0">
            Client data is never commingled or used for training external models.
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="capability-card h-100">
           <div class="mb-3 text-primary"><i class="bi bi-search fs-3"></i></div>
          <h5 class="fw-bold mb-3">Explainable behavior</h5>
          <p class="text-secondary mb-0">
            Systems must show why they acted, not just what they produced.
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="capability-card h-100">
           <div class="mb-3 text-primary"><i class="bi bi-bricks fs-3"></i></div>
          <h5 class="fw-bold mb-3">Incremental deployment</h5>
          <p class="text-secondary mb-0">
            AI is introduced gradually, not dropped into live operations.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5">
  <div class="container-xl py-5">
    <h2 class="h3 fw-bold mb-5">How we got here</h2>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="timeline-item">
              <div class="fw-bold text-dark mb-2">Phase 1 — Software & automation</div>
              <p class="text-secondary mb-0">
                Years spent building web platforms, automation systems,
                and data pipelines for real businesses.
              </p>
            </div>
        
            <div class="timeline-item">
              <div class="fw-bold text-dark mb-2">Phase 2 — AI experimentation</div>
              <p class="text-secondary mb-0">
                Early adoption of language models revealed both their power
                and their operational risks.
              </p>
            </div>
        
            <div class="timeline-item">
              <div class="fw-bold text-dark mb-2">Phase 3 — AI architecture focus</div>
              <p class="text-secondary mb-0">
                Shift from building features to designing controlled,
                auditable AI systems integrated into workflows.
              </p>
            </div>
        </div>
    </div>
  </div>
</section>

<livewire:components.call-to-action 
    title="If you care how AI behaves in your business" 
    text="We should talk." 
/>
@endsection
