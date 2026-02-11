@extends('layouts.app')



@section('content')
<section class="page-hero">
  <div class="container-xl">
    <div class="row">
      <div class="col-lg-8">
        <h1 class="display-5 mb-4">AI products built for real operations</h1>
        <p class="lead text-light opacity-75 mb-0 max-w-650">
          Seractive products are production-grade AI systems designed to be deployed inside
          real businesses — not generic SaaS tools.
        </p>
      </div>
    </div>
  </div>
</section>

@include('components.breadcrumbs', ['class' => 'bg-alt'])

<section class="pb-5 pt-0 bg-alt">
  <div class="container-xl py-5">
    <div class="row g-4">

      <!-- ContextClue -->
      <div class="col-lg-6" id="contextclue">
        <div class="capability-card h-100 p-4 p-md-5">
          <span class="badge bg-green-soft text-primary-dark rounded-pill px-3 py-2 mb-4">
            Knowledge · Documents · Generation
          </span>
          <h3 class="fw-bold mb-3">ContextClue</h3>
          <p class="text-secondary mb-4">
            A private AI knowledge and document generation system that produces accurate,
            source-grounded outputs using your internal data, templates, and rules.
          </p>

          <div class="row g-3 mb-5">
            <div class="col-md-6">
              <div class="small fw-bold text-dark mb-2">Primary use cases</div>
              <ul class="small text-secondary mb-0 ps-3">
                <li>Document generation</li>
                <li>Policy & SOP drafting</li>
                <li>Internal knowledge assistant</li>
                <li>Proposal automation</li>
              </ul>
            </div>
            <div class="col-md-6">
              <div class="small fw-bold text-dark mb-2">Key characteristics</div>
              <ul class="small text-secondary mb-0 ps-3">
                <li>Retrieval-Augmented Generation (RAG)</li>
                <li>Template-controlled outputs</li>
                <li>Private data isolation</li>
                <li>Human approval workflows</li>
              </ul>
            </div>
          </div>

          <div class="d-flex gap-3">
            <a href="{{ url('/products/contextclue') }}" class="btn btn-primary">
              View product
            </a>
            <a href="{{ url('/contact') }}" class="btn btn-outline-primary">
              Request demo
            </a>
          </div>
        </div>
      </div>

      <!-- Nexus Core -->
      <div class="col-lg-6" id="nexus-core">
        <div class="capability-card h-100 p-4 p-md-5">
          <span class="badge bg-green-soft text-primary-dark rounded-pill px-3 py-2 mb-4">
            Operations · CRM · Intelligence
          </span>
          <h3 class="fw-bold mb-3">Nexus Core</h3>
          <p class="text-secondary mb-4">
            The core intelligence layer behind Nexus — enabling self-updating records,
            task prioritization, and next-action recommendations across your operations.
          </p>

          <div class="row g-3 mb-5">
            <div class="col-md-6">
              <div class="small fw-bold text-dark mb-2">Primary use cases</div>
              <ul class="small text-secondary mb-0 ps-3">
                <li>CRM intelligence layer</li>
                <li>Operations dashboards</li>
                <li>Client health monitoring</li>
                <li>Follow-up automation</li>
              </ul>
            </div>
            <div class="col-md-6">
              <div class="small fw-bold text-dark mb-2">Key characteristics</div>
              <ul class="small text-secondary mb-0 ps-3">
                <li>Passive data ingestion</li>
                <li>Context extraction</li>
                <li>Rule-based prioritization</li>
                <li>Action queue interface</li>
              </ul>
            </div>
          </div>

          <div class="d-flex gap-3">
            <a href="{{ url('/products/nexus-core') }}" class="btn btn-primary">
              View product
            </a>
            <a href="{{ url('/contact') }}" class="btn btn-outline-primary">
              Discuss deployment
            </a>
          </div>
        </div>
      </div>

      <!-- Insight Engine -->
      <div class="col-lg-6" id="insight-engine">
        <div class="capability-card h-100 p-4 p-md-5">
          <span class="badge bg-green-soft text-primary-dark rounded-pill px-3 py-2 mb-4">
            Reporting · Analytics · Forecasting
          </span>
          <h3 class="fw-bold mb-3">Insight Engine</h3>
          <p class="text-secondary mb-4">
            The analytics and interpretation engine behind Insight 360 — transforming raw
            metrics into narratives, alerts, and forward-looking insights.
          </p>

          <div class="row g-3 mb-5">
            <div class="col-md-6">
              <div class="small fw-bold text-dark mb-2">Primary use cases</div>
              <ul class="small text-secondary mb-0 ps-3">
                <li>Executive summaries</li>
                <li>Anomaly detection</li>
                <li>Trend interpretation</li>
                <li>Predictive reporting</li>
              </ul>
            </div>
            <div class="col-md-6">
              <div class="small fw-bold text-dark mb-2">Key characteristics</div>
              <ul class="small text-secondary mb-0 ps-3">
                <li>Multi-source data ingestion</li>
                <li>Deterministic calculations</li>
                <li>AI-driven interpretation</li>
                <li>Configurable delivery channels</li>
              </ul>
            </div>
          </div>

          <div class="d-flex gap-3">
            <a href="{{ url('/products/insight-engine') }}" class="btn btn-primary">
              View product
            </a>
            <a href="{{ url('/contact') }}" class="btn btn-outline-primary">
              Request walkthrough
            </a>
          </div>
        </div>
      </div>

      <!-- Concierge Framework -->
      <div class="col-lg-6" id="concierge-framework">
        <div class="capability-card h-100 p-4 p-md-5">
          <span class="badge bg-green-soft text-primary-dark rounded-pill px-3 py-2 mb-4">
            Intake · Agents · Automation
          </span>
          <h3 class="fw-bold mb-3">Concierge Framework</h3>
          <p class="text-secondary mb-4">
            The agent framework powering the 24/7 Growth Concierge — enabling intelligent
            intake, qualification, and onboarding across channels.
          </p>

          <div class="row g-3 mb-5">
            <div class="col-md-6">
              <div class="small fw-bold text-dark mb-2">Primary use cases</div>
              <ul class="small text-secondary mb-0 ps-3">
                <li>Lead qualification agents</li>
                <li>Customer support intake</li>
                <li>Internal request routing</li>
                <li>Onboarding assistants</li>
              </ul>
            </div>
            <div class="col-md-6">
              <div class="small fw-bold text-dark mb-2">Key characteristics</div>
              <ul class="small text-secondary mb-0 ps-3">
                <li>RAG-based answers</li>
                <li>Rule-constrained responses</li>
                <li>Escalation logic</li>
                <li>Multi-channel deployment</li>
              </ul>
            </div>
          </div>

          <div class="d-flex gap-3">
            <a href="{{ url('/products/concierge-framework') }}" class="btn btn-primary">
              View product
            </a>
            <a href="{{ url('/contact') }}" class="btn btn-outline-primary">
              Explore use cases
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<livewire:components.call-to-action 
    title="Deploy AI products inside your business" 
    text="We’ll help you choose the right system and adapt it to your workflows." 
/>
@endsection
