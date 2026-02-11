@extends('layouts.app')

@section('content')
<div class="py-5 bg-light">
    <div class="container-xl pt-5">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold text-dark mb-3">Client Success Stories</h1>
            <p class="lead text-muted max-w-600 mx-auto">Discover how we help forward-thinking companies automate workflows and drive efficiency.</p>
        </div>

        <div class="row g-4">
            @foreach($caseStudies as $study)
            <div class="col-md-6 col-lg-4">
                <a href="{{ route('case-studies.show', $study) }}" class="text-decoration-none card h-100 border-0 shadow-sm rounded-4 overflow-hidden hover-lift transition-all group">
                    <div class="position-relative" style="height: 200px;">
                        @if($study->featured_image)
                            <img src="{{ $study->featured_image }}" class="w-100 h-100 object-fit-cover" alt="{{ $study->title }}">
                        @else
                            <div class="w-100 h-100 bg-secondary d-flex align-items-center justify-content-center text-white">
                                <i class="bi bi-briefcase fs-1 opacity-50"></i>
                            </div>
                        @endif
                        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 group-hover:opacity-10 transition-all"></div>
                        <div class="position-absolute bottom-0 start-0 p-4 w-100">
                             <div class="badge bg-white text-dark shadow-sm rounded-pill mb-2">{{ $study->industry }}</div>
                             <h5 class="text-white fw-bold mb-0 text-shadow">{{ $study->client_name }}</h5>
                        </div>
                    </div>
                    <div class="card-body p-4 d-flex flex-column bg-white">
                        <h4 class="card-title h5 fw-bold mb-3 text-dark group-hover:text-primary transition-all">{{ $study->title }}</h4>
                        
                        {{-- Highlights --}}
                        <div class="mt-auto">
                            <div class="mt-4 text-primary fw-bold small d-flex align-items-center">
                                Read Case Study <i class="bi bi-arrow-right ms-2 group-hover:translate-x-1 transition-all"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

<style>
    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
    }
    .group-hover\:opacity-10:hover { opacity: 0.1; }
    .group-hover\:text-primary:hover { color: var(--primary) !important; }
    .group-hover\:translate-x-1:hover { transform: translateX(4px); }
    .transition-all { transition: all 0.3s ease; }
    .text-shadow { text-shadow: 0 2px 4px rgba(0,0,0,0.5); }
    .bg-primary-subtle { background-color: rgba(61, 187, 125, 0.1); }
    .text-primary-dark { color: #166534; }
</style>
@endsection
