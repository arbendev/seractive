@extends('layouts.app')



@section('content')
<section class="page-hero">
  <div class="container-xl">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <h1 class="display-5 mb-4">Industries we build AI systems for</h1>
        <p class="lead text-light opacity-75 mb-0">
          We don’t sell industry templates. We design AI architectures around
          operational realities, regulatory constraints, and data flows.
        </p>
      </div>
      <div class="col-lg-5 offset-lg-1 mt-5 mt-lg-0">
        <div class="bg-white p-4 p-md-5 rounded-4 shadow-lg text-dark">
            <h3 class="fw-bold mb-2">Get your AI audit</h3>
            <p class="text-secondary mb-4 small">See where automation can save you money.</p>
            <form>
                <div class="mb-3">
                    <label for="workEmail" class="form-label small fw-bold text-secondary">Work Email</label>
                    <input type="email" class="form-control bg-light border-light" id="workEmail" placeholder="name@company.com">
                </div>
                <div class="mb-4">
                    <label for="companyName" class="form-label small fw-bold text-secondary">Company Name</label>
                    <input type="text" class="form-control bg-light border-light" id="companyName" placeholder="Acme Corp">
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary py-2 fw-semibold">Book Strategy Call</button>
                </div>
                <p class="text-center text-muted mt-3 mb-0" style="font-size: 0.75rem;">
                    No commitment required.
                </p>
            </form>
        </div>
      </div>
    </div>
  </div>
</section>
@include('components.breadcrumbs', ['class' => 'bg-alt'])

<section class="pt-0 pb-5 bg-alt">
  <div class="container-xl py-5">
    <div class="row g-4">

      <!-- Aviation -->
      <div class="col-lg-6">
        <div class="capability-card h-100 p-4 p-md-5">
          <span class="badge bg-green-soft text-primary-dark rounded-pill px-3 py-2 mb-4">
            Aviation
          </span>
          <h3 class="fw-bold mb-3">Aviation & Transportation</h3>
          <p class="text-secondary mb-4">
            High-volume inquiries, operational coordination, and compliance-driven
            documentation create friction across aviation operations.
          </p>

          <div class="row g-3 mb-5">
            <div class="col-md-6">
              <div class="small fw-bold text-dark mb-2">AI solves</div>
              <ul class="small text-secondary mb-0 ps-3">
                <li>Passenger inquiry handling</li>
                <li>Operational reporting</li>
                <li>Documentation workflows</li>
                <li>Incident summaries</li>
              </ul>
            </div>
            <div class="col-md-6">
              <div class="small fw-bold text-dark mb-2">Systems deployed</div>
              <ul class="small text-secondary mb-0 ps-3">
                <li>ContextClue</li>
                <li>Growth Concierge</li>
                <li>Insight Engine</li>
              </ul>
            </div>
          </div>

          <a href="{{ url('/contact') }}" class="btn btn-outline-primary">
            Discuss aviation use case
          </a>
        </div>
      </div>

      <!-- Private Investments -->
      <div class="col-lg-6">
        <div class="capability-card h-100 p-4 p-md-5">
          <span class="badge bg-green-soft text-primary-dark rounded-pill px-3 py-2 mb-4">
            Investments
          </span>
          <h3 class="fw-bold mb-3">Private Investments & Asset Management</h3>
          <p class="text-secondary mb-4">
            Deal flow, reporting, and investor communication generate repetitive,
            high-context work that benefits from automation.
          </p>

          <div class="row g-3 mb-5">
            <div class="col-md-6">
              <div class="small fw-bold text-dark mb-2">AI solves</div>
              <ul class="small text-secondary mb-0 ps-3">
                <li>Deal summaries</li>
                <li>Investor reporting</li>
                <li>Document drafting</li>
                <li>Portfolio monitoring</li>
              </ul>
            </div>
            <div class="col-md-6">
              <div class="small fw-bold text-dark mb-2">Systems deployed</div>
              <ul class="small text-secondary mb-0 ps-3">
                <li>ContextClue</li>
                <li>Insight Engine</li>
                <li>Nexus Core</li>
              </ul>
            </div>
          </div>

          <a href="{{ url('/contact') }}" class="btn btn-outline-primary">
            Explore investment workflows
          </a>
        </div>
      </div>

      <!-- Finance & Insurance -->
      <div class="col-lg-6">
        <div class="capability-card h-100 p-4 p-md-5">
          <span class="badge bg-green-soft text-primary-dark rounded-pill px-3 py-2 mb-4">
            Finance
          </span>
          <h3 class="fw-bold mb-3">Finance & Insurance</h3>
          <p class="text-secondary mb-4">
            Finance teams manage compliance, customer inquiries, claims, and
            documentation under strict regulatory constraints.
          </p>

          <div class="row g-3 mb-5">
            <div class="col-md-6">
              <div class="small fw-bold text-dark mb-2">AI solves</div>
              <ul class="small text-secondary mb-0 ps-3">
                <li>Claims intake</li>
                <li>Policy explanations</li>
                <li>Compliance summaries</li>
                <li>Client communication</li>
              </ul>
            </div>
            <div class="col-md-6">
              <div class="small fw-bold text-dark mb-2">Systems deployed</div>
              <ul class="small text-secondary mb-0 ps-3">
                <li>Concierge Framework</li>
                <li>ContextClue</li>
                <li>Workforce Efficiency Architect</li>
              </ul>
            </div>
          </div>

          <a href="{{ url('/contact') }}" class="btn btn-outline-primary">
            Review finance automation
          </a>
        </div>
      </div>

      <!-- Manufacturing -->
      <div class="col-lg-6">
        <div class="capability-card h-100 p-4 p-md-5">
          <span class="badge bg-green-soft text-primary-dark rounded-pill px-3 py-2 mb-4">
            Manufacturing
          </span>
          <h3 class="fw-bold mb-3">Manufacturing</h3>
          <p class="text-secondary mb-4">
            Manufacturing organizations juggle procurement, production data,
            documentation, and internal coordination.
          </p>

          <div class="row g-3 mb-5">
            <div class="col-md-6">
              <div class="small fw-bold text-dark mb-2">AI solves</div>
              <ul class="small text-secondary mb-0 ps-3">
                <li>Production reporting</li>
                <li>SOP generation</li>
                <li>Internal coordination</li>
                <li>Operational alerts</li>
              </ul>
            </div>
            <div class="col-md-6">
              <div class="small fw-bold text-dark mb-2">Systems deployed</div>
              <ul class="small text-secondary mb-0 ps-3">
                <li>Insight Engine</li>
                <li>ContextClue</li>
                <li>Workforce Efficiency Architect</li>
              </ul>
            </div>
          </div>

          <a href="{{ url('/contact') }}" class="btn btn-outline-primary">
            See manufacturing workflows
          </a>
        </div>
      </div>

      <!-- Retail -->
      <div class="col-lg-6">
        <div class="capability-card h-100 p-4 p-md-5">
          <span class="badge bg-green-soft text-primary-dark rounded-pill px-3 py-2 mb-4">
            Retail
          </span>
          <h3 class="fw-bold mb-3">Retail & E-commerce</h3>
          <p class="text-secondary mb-4">
            Retail operations generate continuous customer interactions,
            inventory signals, and performance metrics.
          </p>

          <div class="row g-3 mb-5">
            <div class="col-md-6">
              <div class="small fw-bold text-dark mb-2">AI solves</div>
              <ul class="small text-secondary mb-0 ps-3">
                <li>Customer inquiries</li>
                <li>Product content generation</li>
                <li>Sales performance analysis</li>
                <li>Support automation</li>
              </ul>
            </div>
            <div class="col-md-6">
              <div class="small fw-bold text-dark mb-2">Systems deployed</div>
              <ul class="small text-secondary mb-0 ps-3">
                <li>Growth Concierge</li>
                <li>ContextClue</li>
                <li>Insight Engine</li>
              </ul>
            </div>
          </div>

          <a href="{{ url('/contact') }}" class="btn btn-outline-primary">
            Discuss retail automation
          </a>
        </div>
      </div>

      <!-- Logistics -->
      <div class="col-lg-6">
        <div class="capability-card h-100 p-4 p-md-5">
          <span class="badge bg-green-soft text-primary-dark rounded-pill px-3 py-2 mb-4">
            Logistics
          </span>
          <h3 class="fw-bold mb-3">Logistics & Supply Chain</h3>
          <p class="text-secondary mb-4">
            Logistics organizations coordinate vendors, shipments, exceptions,
            and reporting under time pressure.
          </p>

          <div class="row g-3 mb-5">
            <div class="col-md-6">
              <div class="small fw-bold text-dark mb-2">AI solves</div>
              <ul class="small text-secondary mb-0 ps-3">
                <li>Status updates</li>
                <li>Exception handling</li>
                <li>Vendor communication</li>
                <li>Operational dashboards</li>
              </ul>
            </div>
            <div class="col-md-6">
              <div class="small fw-bold text-dark mb-2">Systems deployed</div>
              <ul class="small text-secondary mb-0 ps-3">
                <li>Nexus Core</li>
                <li>Insight Engine</li>
                <li>Workforce Efficiency Architect</li>
              </ul>
            </div>
          </div>

          <a href="{{ url('/contact') }}" class="btn btn-outline-primary">
            Map logistics use case
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<livewire:components.call-to-action 
    title="Your industry isn’t listed?" 
    text="We design AI systems around workflows, not labels." 
/>
@endsection
