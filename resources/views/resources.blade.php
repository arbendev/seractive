@extends('layouts.app')


@section('content')
<section class="page-hero hero-alt">
  <div class="container-xl">
    <div class="row">
      <div class="col-lg-8">
        <h1 class="section-title mb-3">Resources for operators and decision-makers</h1>
        <p class="lead muted">
          Practical material on designing, deploying, and governing AI systems
          inside real businesses — not theoretical hype.
        </p>
      </div>
    </div>
  </div>
</section>
@include('components.breadcrumbs')

<section class="pt-0 pb-5">
  <div class="container-xl">
    <div class="row g-4">

      <!-- Insights -->
      <div class="col-lg-4">
        <div class="resource-card">
          <span class="badge badge-soft rounded-pill px-3 py-2 mb-3">
            Insights
          </span>
          <h3 class="fw-semibold mb-3">AI & Operations Insights</h3>
          <p class="muted mb-4">
            Short, focused analyses on where AI creates leverage, reduces cost,
            and introduces risk across business operations.
          </p>
          <ul class="small muted mb-4">
            <li>AI system design patterns</li>
            <li>Operational failure modes</li>
            <li>Human-in-the-loop strategies</li>
            <li>Cost vs. automation tradeoffs</li>
          </ul>
          <a href="{{ url('/resources/insights') }}" class="btn btn-outline-primary">
            View insights
          </a>
        </div>
      </div>

      <!-- Case Studies -->
      <div class="col-lg-4">
        <div class="resource-card">
          <span class="badge badge-soft rounded-pill px-3 py-2 mb-3">
            Case Studies
          </span>
          <h3 class="fw-semibold mb-3">Deployment Case Studies</h3>
          <p class="muted mb-4">
            Real examples of AI systems deployed inside organizations —
            including constraints, failures, and outcomes.
          </p>
          <ul class="small muted mb-4">
            <li>Passenger assistance AI</li>
            <li>Automated intake systems</li>
            <li>Predictive reporting deployments</li>
            <li>Labor reduction workflows</li>
          </ul>
          <a href="{{ url('/resources/case-studies') }}" class="btn btn-outline-primary">
            Explore case studies
          </a>
        </div>
      </div>

      <!-- Guides -->
      <div class="col-lg-4">
        <div class="resource-card">
          <span class="badge badge-soft rounded-pill px-3 py-2 mb-3">
            Guides
          </span>
          <h3 class="fw-semibold mb-3">Architecture & Governance Guides</h3>
          <p class="muted mb-4">
            Long-form guides covering AI architecture, data isolation,
            governance, and deployment controls.
          </p>
          <ul class="small muted mb-4">
            <li>AI audit frameworks</li>
            <li>RAG vs. fine-tuning</li>
            <li>Approval & escalation design</li>
            <li>Regulatory considerations</li>
          </ul>
          <a href="{{ url('/resources/guides') }}" class="btn btn-outline-primary">
            Read guides
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container-xl">
    <div class="row g-4 align-items-center">
      <div class="col-lg-7">
        <h2 class="h3 section-title mb-3">Featured: AI Architecture Audit</h2>
        <p class="muted mb-4">
          A structured framework for evaluating where AI fits in your organization,
          what should be automated, and where human oversight is mandatory.
        </p>
        <ul class="muted mb-4">
          <li>Identify repeatable tasks</li>
          <li>Assess data readiness</li>
          <li>Map risk and escalation paths</li>
          <li>Prioritize automation ROI</li>
        </ul>
        <a href="{{ url('/resources/ai-audit') }}" class="btn btn-primary">
          View audit framework
        </a>
      </div>
      <div class="col-lg-5">
        <div class="resource-card">
          <div class="fw-semibold mb-2">Who this is for</div>
          <ul class="small muted mb-0">
            <li>Founders & executives</li>
            <li>Operations leaders</li>
            <li>Technical decision-makers</li>
            <li>Compliance-aware teams</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<livewire:components.call-to-action 
    title="Looking for something specific?" 
    text="We can share material relevant to your industry, constraints, or system goals." 
/>
@endsection
