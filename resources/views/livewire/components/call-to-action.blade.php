<section class="cta-band bg-primary py-5">
  <div class="container-xl">
    <div class="row g-3 align-items-center">
      <div class="col-lg-8">
        <h3 class="fw-bold mb-2">{{ $title }}</h3>
        <div class="text-white-80">
          {{ $text }}
        </div>
      </div>
      <div class="col-lg-4 text-lg-end">
        <a href="{{ url($buttonUrl) }}" class="btn btn-light btn-lg fw-bold text-primary px-5">
          {{ $buttonText }}
        </a>
      </div>
    </div>
  </div>
</section>