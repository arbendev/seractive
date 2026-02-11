@extends('layouts.app')



@section('content')
<section class="page-hero">
  <div class="container-xl">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <span class="text-primary fw-bold text-uppercase small mb-2 d-block letter-spacing-2">Our Services</span>
        <h1 class="display-5 mb-4">AI systems designed to replace manual work</h1>
        <p class="lead text-light opacity-75 mb-0">
          Seractive builds production-grade AI architectures that automate marketing,
          operations, reporting, and onboarding — reducing labor cost and increasing output.
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

<section class="py-5 bg-alt" style="background-color: var(--bg-alt);">
  <div class="container-xl py-5">
    <div class="row g-4">

      <!-- Service 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="capability-card h-100">
          <div class="icon-wrapper">
             <i class="bi bi-megaphone"></i>
          </div>
          <h5 class="fw-bold mb-2">Autonomic Marketing Hub</h5>
          <p class="small text-muted text-uppercase fw-bold mb-3" style="font-size: 0.75rem;">SEO · Social · Email Automation</p>
          <p class="text-secondary mb-4">
            A custom AI-driven marketing system that researches, writes, and distributes
            content across SEO, social media, and email — aligned to your brand voice.
          </p>
          <a href="{{ url('/services/autonomic-marketing') }}" class="btn btn-link text-decoration-none p-0 fw-semibold">
            View service <i class="bi bi-arrow-right ms-1"></i>
          </a>
        </div>
      </div>

      <!-- Service 2 -->
      <div class="col-md-6 col-lg-4">
        <div class="capability-card h-100">
          <div class="icon-wrapper">
             <i class="bi bi-people"></i>
          </div>
          <h5 class="fw-bold mb-2">Nexus — AI CRM</h5>
          <p class="small text-muted text-uppercase fw-bold mb-3" style="font-size: 0.75rem;">Client · Task · Workflow Intelligence</p>
          <p class="text-secondary mb-4">
            An intelligent CRM layer that listens to emails, meetings, and messages,
            auto-updates records, prioritizes work, and recommends next actions.
          </p>
          <a href="{{ url('/services/nexus-ai-crm') }}" class="btn btn-link text-decoration-none p-0 fw-semibold">
            View service <i class="bi bi-arrow-right ms-1"></i>
          </a>
        </div>
      </div>

      <!-- Service 3 -->
      <div class="col-md-6 col-lg-4">
        <div class="capability-card h-100">
          <div class="icon-wrapper">
             <i class="bi bi-headset"></i>
          </div>
          <h5 class="fw-bold mb-2">24/7 Growth Concierge</h5>
          <p class="small text-muted text-uppercase fw-bold mb-3" style="font-size: 0.75rem;">Lead Capture · Qualification · Onboarding</p>
          <p class="text-secondary mb-4">
            A custom AI intake agent that replaces contact forms by qualifying leads,
            answering objections, booking calls, and initiating onboarding automatically.
          </p>
          <a href="{{ url('/services/growth-concierge') }}" class="btn btn-link text-decoration-none p-0 fw-semibold">
            View service <i class="bi bi-arrow-right ms-1"></i>
          </a>
        </div>
      </div>

      <!-- Service 4 -->
      <div class="col-md-6 col-lg-4">
        <div class="capability-card h-100">
          <div class="icon-wrapper">
             <i class="bi bi-bar-chart-line"></i>
          </div>
          <h5 class="fw-bold mb-2">Insight 360</h5>
          <p class="small text-muted text-uppercase fw-bold mb-3" style="font-size: 0.75rem;">Hourly · Daily · Predictive Reporting</p>
          <p class="text-secondary mb-4">
            An AI-powered reporting and intelligence suite that monitors your business
            continuously and delivers insights, alerts, and strategic suggestions.
          </p>
          <a href="{{ url('/services/insight-360') }}" class="btn btn-link text-decoration-none p-0 fw-semibold">
            View service <i class="bi bi-arrow-right ms-1"></i>
          </a>
        </div>
      </div>

      <!-- Service 5 -->
      <div class="col-md-6 col-lg-4">
        <div class="capability-card h-100">
            <div class="icon-wrapper">
             <i class="bi bi-check-circle"></i>
          </div>
          <h5 class="fw-bold mb-2">Workforce Efficiency Architect</h5>
          <p class="small text-muted text-uppercase fw-bold mb-3" style="font-size: 0.75rem;">Labor Reduction · Automation · AI Audits</p>
          <p class="text-secondary mb-4">
            A consultancy-first engagement that identifies repeatable tasks and replaces
            them with agentic AI workflows to reduce labor cost and increase margins.
          </p>
          <a href="{{ url('/services/workforce-efficiency') }}" class="btn btn-link text-decoration-none p-0 fw-semibold">
            View service <i class="bi bi-arrow-right ms-1"></i>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="bg-primary py-5">
  <div class="container-xl text-center py-5">
    <div class="col-lg-8 mx-auto text-white">
        <h2 class="display-5 fw-bold mb-4">
        Not sure which system you need?
        </h2>
        <p class="lead mb-5 opacity-75">
            Start with a short AI strategy audit. We’ll identify where automation will have
            the highest financial impact.
        </p>
        <a href="{{ url('/contact') }}" class="btn btn-light btn-lg fw-bold text-primary px-5">Book a strategy call</a>
    </div>
  </div>
</section>
@endsection
