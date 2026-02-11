@extends('layouts.app')



@section('content')
<!-- ================= PAGE HERO ================= -->
<section class="page-hero">
  <div class="container-xl">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <span class="badge bg-green-soft text-primary-dark rounded-pill px-3 py-2 mb-4 border-0">
            Client · Tasks · Workflow Intelligence
        </span>
        <h1 class="display-5 mb-4">Nexus — AI CRM</h1>
        <p class="lead text-light opacity-75 mb-4">
          A CRM that updates itself. Nexus listens to your business communication, extracts context,
          creates tasks, prioritizes work, and recommends next actions without manual data entry.
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
        <h2 class="h3 fw-bold mb-4">The problem Nexus solves</h2>
        <p class="text-secondary mb-4">
          Traditional CRMs become stale because humans avoid updating them. That creates missed follow-ups,
          lost context, and invisible risk.
        </p>
        <div class="row g-3">
          <div class="col-md-6">
            <div class="capability-card h-100 p-4">
              <div class="fw-bold text-dark mb-2">Stale records</div>
              <div class="small text-secondary">Data gets entered late or not at all.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="capability-card h-100 p-4">
              <div class="fw-bold text-dark mb-2">Missed follow-ups</div>
              <div class="small text-secondary">No reliable system for “next step” execution.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="capability-card h-100 p-4">
              <div class="fw-bold text-dark mb-2">Unclear priorities</div>
              <div class="small text-secondary">Teams see lists, not ranked actions.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="capability-card h-100 p-4">
              <div class="fw-bold text-dark mb-2">Operational blindness</div>
              <div class="small text-secondary">At-risk clients are identified too late.</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Outcomes -->
      <div class="col-lg-6">
        <div class="bg-white p-5 rounded-4 border h-100 shadow-sm">
          <h3 class="h4 fw-bold mb-4">What Nexus does</h3>
          <div class="d-flex flex-column gap-3">
            <div class="capability-card p-3">
              <div class="fw-bold text-dark mb-1">Auto-capture context</div>
              <div class="small text-secondary">Extracts names, intent, budgets, timelines, and decisions from communication.</div>
            </div>
            <div class="capability-card p-3">
              <div class="fw-bold text-dark mb-1">Auto-create tasks</div>
              <div class="small text-secondary">Generates tasks and reminders based on the content of messages and meetings.</div>
            </div>
            <div class="capability-card p-3">
              <div class="fw-bold text-dark mb-1">Prioritize work</div>
              <div class="small text-secondary">Ranks actions by urgency, value, and risk signals.</div>
            </div>
            <div class="capability-card p-3">
              <div class="fw-bold text-dark mb-1">Recommend next actions</div>
              <div class="small text-secondary">Drafts follow-up messages and provides a “next best action” queue.</div>
            </div>
          </div>
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
          <div class="fw-bold text-dark mb-2">1. Systems Sync</div>
          <div class="small text-secondary">Connect email, calendar, and work tools to establish the data flow.</div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="capability-card h-100 p-4 border bg-alt">
          <div class="fw-bold text-dark mb-2">2. Data Model</div>
          <div class="small text-secondary">Define entities: contacts, deals, projects, tasks, and status logic.</div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="capability-card h-100 p-4 border bg-alt">
          <div class="fw-bold text-dark mb-2">3. Automation Rules</div>
          <div class="small text-secondary">Configure triggers: follow-up windows, sentiment flags, client health scoring.</div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="capability-card h-100 p-4 border bg-alt">
          <div class="fw-bold text-dark mb-2">4. Action Dashboard</div>
          <div class="small text-secondary">Deploy a “work queue” interface showing priorities instead of raw lists.</div>
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
              <div class="fw-bold text-dark mb-1">CRM export (optional)</div>
              <div class="small text-secondary">If you already use a CRM, we import contacts + deal history.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-4 border rounded-3 h-100">
              <div class="fw-bold text-dark mb-1">Workflow logic</div>
              <div class="small text-secondary">Your sales/operations stages and what “done” means internally.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-4 border rounded-3 h-100">
              <div class="fw-bold text-dark mb-1">Tool access</div>
              <div class="small text-secondary">Email/calendar + work tools. Read-only where possible.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-4 border rounded-3 h-100">
              <div class="fw-bold text-dark mb-1">Team roles</div>
              <div class="small text-secondary">Who owns what and where tasks should route.</div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-5">
        <div class="bg-alt p-5 rounded-4 h-100">
          <h3 class="h5 fw-bold mb-3">Common integrations</h3>
          <p class="small text-secondary mb-4">We connect to your existing tools.</p>
          <div class="d-flex flex-wrap gap-2">
            <span class="badge bg-white text-secondary border fw-normal px-3 py-2">Google Workspace</span>
            <span class="badge bg-white text-secondary border fw-normal px-3 py-2">Office 365</span>
            <span class="badge bg-white text-secondary border fw-normal px-3 py-2">HubSpot</span>
            <span class="badge bg-white text-secondary border fw-normal px-3 py-2">Salesforce</span>
            <span class="badge bg-white text-secondary border fw-normal px-3 py-2">Asana</span>
            <span class="badge bg-white text-secondary border fw-normal px-3 py-2">Jira</span>
            <span class="badge bg-white text-secondary border fw-normal px-3 py-2">Slack</span>
            <span class="badge bg-white text-secondary border fw-normal px-3 py-2">Notion</span>
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
            <div class="accordion shadow-sm" id="faq-nx">
            <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="nx1">
                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#nxc1">
                    Does this replace HubSpot/Salesforce?
                </button>
                </h2>
                <div id="nxc1" class="accordion-collapse collapse show" data-bs-parent="#faq-nx">
                <div class="accordion-body text-secondary">
                    It can replace them, or it can sit on top of them as an automation and intelligence layer.
                </div>
                </div>
            </div>

            <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="nx2">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#nxc2">
                    Is data private?
                </button>
                </h2>
                <div id="nxc2" class="accordion-collapse collapse" data-bs-parent="#faq-nx">
                <div class="accordion-body text-secondary">
                    Yes. We use private API workflows and isolated storage. Your data remains your asset.
                </div>
                </div>
            </div>

            <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="nx3">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#nxc3">
                    What does the team actually see day-to-day?
                </button>
                </h2>
                <div id="nxc3" class="accordion-collapse collapse" data-bs-parent="#faq-nx">
                <div class="accordion-body text-secondary">
                    A prioritized action queue: follow-ups, risk flags, task assignments, and drafted messages for approval.
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
    title="Deploy a CRM that runs itself" 
    text="We’ll map your stack, define workflow logic, and implement the Nexus action queue." 
/>
@endsection
