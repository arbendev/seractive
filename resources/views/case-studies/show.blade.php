@extends('layouts.app')

@section('content')
{{-- Hero Section --}}
<div class="position-relative w-100 d-flex align-items-center justify-content-center" style="min-height: 60vh; background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.8)), url('{{ $caseStudy->featured_image ?? 'https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80' }}') no-repeat center center; background-size: cover;">
    <div class="container-xl position-relative z-2 text-center text-white">
        <div class="badge bg-white text-dark px-3 py-2 rounded-pill mb-4 fw-bold letter-spacing-1 shadow-sm">{{ $caseStudy->industry }}</div>
        <h1 class="display-3 fw-bold mb-3 text-shadow">{{ $caseStudy->title }}</h1>
        <p class="lead fw-medium opacity-75 mb-0">Client: {{ $caseStudy->client_name }}</p>
    </div>
</div>

{{-- Content Section --}}
<div class="py-5 bg-white">
    <div class="container-xl">


        <div class="row g-5 justify-content-center">
            <div class="col-lg-8">
                <article class="blog-content text-secondary-dark">
                    <div class="mb-5">
                        <h2 class="fw-bold text-dark mb-3 h3">The Challenge</h2>
                        <div class="text-justify">
                            {!! $caseStudy->challenge !!}
                        </div>
                    </div>

                    <div class="mb-5">
                        <h2 class="fw-bold text-dark mb-3 h3">Our Solution</h2>
                        <div class="text-justify">
                            {!! $caseStudy->solution !!}
                        </div>
                    </div>

                    <div class="mb-5">
                        <h2 class="fw-bold text-dark mb-3 h3">The Results</h2>
                        <div class="text-justify">
                            {!! $caseStudy->results !!}
                        </div>
                    </div>
                </article>

                <div class="d-flex justify-content-center mt-5">
                    <a href="{{ route('case-studies.index') }}" class="btn btn-outline-primary rounded-pill px-5 py-2 fw-semibold"><i class="bi bi-arrow-left me-2"></i> All Case Studies</a>
                </div>
            </div>

            {{-- Sidebar --}}
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 2rem; z-index: 10;">
                    {{-- CTA Widget --}}
                    <div class="card border-0 bg-dark text-white rounded-4 p-4 shadow-sm mb-4">
                        <div class="card-body text-center">
                            <h4 class="fw-bold mb-3">Ready to achieve similar results?</h4>
                            <p class="text-white-50 mb-4 small">Schedule a free consultation to verify how our automation solutions can work for you.</p>
                            <a href="#" class="btn btn-primary w-100 rounded-pill fw-bold py-2">Book a Demo</a>
                        </div>
                    </div>

                    {{-- Newsletter Widget --}}
                    <div class="card border-0 shadow-sm rounded-4 mb-4 overflow-hidden bg-secondary text-white">
                        <div class="card-body p-4 text-center">
                            <div class="icon-box bg-white bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 48px; height: 48px;">
                                <i class="bi bi-envelope-paper fs-4 text-primary"></i>
                            </div>
                            <h5 class="fw-bold mb-2">Subscribe</h5>
                            <p class="small text-white-50 mb-4">Get the latest insights on AI and automation delivered to your inbox.</p>
                            <livewire:components.newsletter-signup />
                        </div>
                    </div>

                     {{-- Share Widget --}}
                    <div class="card border-0 bg-light rounded-4 p-4 shadow-sm">
                        <h5 class="fw-bold mb-3">Share this story</h5>
                        <div class="d-flex gap-2">
                             <a href="#" class="btn btn-white shadow-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;"><i class="bi bi-linkedin text-primary"></i></a>
                            <a href="#" class="btn btn-white shadow-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;"><i class="bi bi-twitter-x text-dark"></i></a>
                            <a href="#" class="btn btn-white shadow-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;"><i class="bi bi-facebook text-primary"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .text-shadow { text-shadow: 0 2px 10px rgba(0,0,0,0.5); }
    .letter-spacing-1 { letter-spacing: 1px; }
    .text-justify { text-align: justify; }
    .mt-n5 { margin-top: -4rem !important; }
    
    /* Corporate efficient typography */
    .blog-content { font-size: 1rem; line-height: 1.7; }
    .blog-content p { margin-bottom: 1.25rem; }

    @media (min-width: 768px) {
        .border-end-md { border-right: 1px solid #eee; }
        .border-end-md:last-child { border-right: none; }
    }
</style>
@endsection
