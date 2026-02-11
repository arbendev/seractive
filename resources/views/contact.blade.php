@extends('layouts.app')

@section('content')
<section class="page-hero">
  <div class="container-xl">
    <div class="row">
      <div class="col-lg-8">
        <h1 class="display-5 mb-4">Let's talk about your workflows</h1>
        <p class="lead text-light opacity-75">
          This is not a sales form.  
          It's the first step in understanding whether AI can meaningfully
          reduce cost, risk, or friction in your operations.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="py-5">
  <div class="container-xl py-5">
    <div class="row g-5">

      <!-- Context -->
      <div class="col-lg-5">
        <div class="sticky-content">
            <h2 class="h4 fw-bold mb-4">What happens next</h2>
            <p class="text-secondary mb-4">
              We review your submission to understand:
            </p>
            <ul class="text-secondary mb-4 list-unstyled d-flex flex-column gap-2">
              <li class="d-flex align-items-start gap-2"><i class="bi bi-check2 text-primary mt-1"></i> Where manual effort is being wasted</li>
              <li class="d-flex align-items-start gap-2"><i class="bi bi-check2 text-primary mt-1"></i> What data and systems are involved</li>
              <li class="d-flex align-items-start gap-2"><i class="bi bi-check2 text-primary mt-1"></i> Whether AI is appropriate — or premature</li>
            </ul>
            <p class="text-secondary mb-5">
              If there's a clear opportunity, we'll schedule a focused
              strategy call. If not, we'll tell you honestly.
            </p>
        </div>
      </div>

      <!-- Form -->
      <div class="col-lg-7">
          <livewire:components.contact-form />
      </div>

    </div>
  </div>
</section>

<section class="bg-primary py-5">
  <div class="container-xl text-center py-5">
    <div class="col-lg-8 mx-auto text-white">
        <h2 class="display-6 fw-bold mb-4">
            Prefer a structured evaluation?
        </h2>
        <p class="lead mb-5 opacity-75">
            Ask about our AI Architecture Audit.
        </p>
        <a href="{{ url('/resources/ai-audit') }}" class="btn btn-light btn-lg fw-bold text-primary px-5">View audit framework</a>
    </div>
  </div>
</section>
@endsection
