@extends('layouts.app')

@section('content')
<!-- Immersive Hero Section -->
<div class="position-relative w-100 d-flex align-items-center justify-content-center" style="min-height: 50vh; background-color: #0F172A;">
    <!-- Background Image with Overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100">
        <div class="w-100 h-100" style="background-image: url('{{ $post->featured_image }}'); background-size: cover; background-position: center;"></div>
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(0deg, rgba(15,23,42,0.95) 0%, rgba(15,23,42,0.7) 100%);"></div>
    </div>

    <!-- Hero Content -->
    <div class="container-xl position-relative z-2 text-center text-white py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <!-- Categories -->
                <div class="mb-4">
                    @foreach($post->categories as $category)
                        <a href="{{ route('blog.index', ['category' => $category->slug]) }}" class="badge bg-primary-soft text-primary-light text-decoration-none px-3 py-2 rounded-pill fw-semibold text-uppercase letter-spacing-1 mb-2 border border-primary border-opacity-25">{{ $category->name }}</a>
                    @endforeach
                </div>

                <!-- Title -->
                <h1 class="display-4 fw-bold mb-4 lh-tight letter-spacing-tight">{{ $post->title }}</h1>

                <!-- Meta -->
                <div class="d-flex align-items-center justify-content-center gap-4 text-white-50 fs-sm fw-medium">
                    <span>{{ $post->published_at->format('F d, Y') }}</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Content Grid -->
<div class="container-fluid px-lg-5 py-5 bg-white">
    <div class="row gx-lg-5 justify-content-center">
        <!-- Left Sidebar: Table of Contents -->
        <div class="col-lg-2 d-none d-lg-block">
            <div class="sticky-top pt-5" style="top: 20px; z-index: 10;">
                <h6 class="text-uppercase text-muted fw-bold mb-4 fs-xs letter-spacing-1">Table of Contents</h6>
                <nav id="toc" class="nav flex-column toc-nav small border-start border-2 ps-3" style="border-color: #f1f5f9 !important;">
                    <!-- Javascript will populate this -->
                </nav>
                
                <div class="mt-5 pt-4">
                    <h6 class="text-uppercase text-muted fw-bold mb-3 fs-xs letter-spacing-1">Share this post</h6>
                    <div class="d-flex gap-2">
                        <a href="#" class="btn btn-sm btn-outline-secondary rounded-circle p-0 d-flex align-items-center justify-content-center transition-all hover-scale" style="width: 36px; height: 36px;"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-secondary rounded-circle p-0 d-flex align-items-center justify-content-center transition-all hover-scale" style="width: 36px; height: 36px;"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-secondary rounded-circle p-0 d-flex align-items-center justify-content-center transition-all hover-scale" style="width: 36px; height: 36px;"><i class="bi bi-facebook"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Center Column: Article Content -->
        <div class="col-lg-7 col-xl-6">
            <article class="blog-content text-secondary-dark">
                <!-- Drop cap or lead text logic could go here -->
                <div class="lead mb-4 fw-medium text-dark lh-base">
                    {{-- Placeholder for excerpt if available --}}
                </div>
                
                {!! nl2br(e($post->content)) !!}
            </article>

            <!-- Tags -->
            <div class="mt-5 pt-4 border-top">
                <div class="d-flex flex-wrap gap-2 align-items-center">
                    <span class="fw-bold text-dark me-2 small text-uppercase letter-spacing-1">Tags:</span>
                    @foreach($post->tags as $tag)
                        <a href="#" class="badge bg-light text-secondary border text-decoration-none px-3 py-2 fw-normal rounded-pill">#{{ $tag->name }}</a>
                    @endforeach
                </div>
            </div>
            
            <div class="d-flex justify-content-center mt-5">
                <a href="{{ route('blog.index') }}" class="btn btn-outline-primary rounded-pill px-5 py-2 fw-semibold"><i class="bi bi-arrow-left me-2"></i> Back</a>
            </div>
        </div>

        <!-- Right Sidebar: Widgets -->
        <div class="col-lg-3 col-xl-3 d-none d-lg-block">
            <div class="sticky-top pt-5 ps-xl-4" style="top: 20px;">
                
                <!-- Newsletter Widget -->
                <div class="card border-0 shadow-sm rounded-4 mb-4 overflow-hidden bg-secondary text-white">
                    <div class="card-body p-4 text-center">
                        <div class="icon-box bg-white bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 48px; height: 48px;">
                            <i class="bi bi-envelope-paper fs-4 text-primary"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Subscribe</h5>
                        <p class="small text-white-50 mb-4">Get the latest insights on AI and automation delivered to your inbox.</p>
                        <form action="#" method="POST">
                            <div class="mb-3">
                                <input type="email" class="form-control form-control-sm bg-white bg-opacity-10 border-0 text-white placeholder-white-50" placeholder="Your work email" style="height: 42px;">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm w-100 fw-bold py-2">Sign me up</button>
                        </form>
                    </div>
                </div>

                <!-- Related Posts -->
                @if($relatedPosts->count() > 0)
                <div class="mb-4">
                    <h6 class="text-uppercase text-muted fw-bold mb-3 fs-xs letter-spacing-1">Related Articles</h6>
                    <div class="d-flex flex-column gap-3">
                        @foreach($relatedPosts as $related)
                        <a href="{{ route('blog.show', $related) }}" class="text-decoration-none group">
                            <div class="card border-0 bg-transparent h-100 group-hover:bg-light transition-all rounded-3 p-2 mx-n2">
                                <div class="row g-2 align-items-center">
                                    <div class="col-4">
                                        <img src="{{ $related->featured_image }}" class="rounded-3 w-100 object-fit-cover shadow-sm" style="height: 60px;" alt="{{ $related->title }}">
                                    </div>
                                    <div class="col-8">
                                        <h6 class="fw-bold text-dark mb-1 fs-sm text-truncate-2 lh-sm">{{ $related->title }}</h6>
                                        <div class="small text-muted" style="font-size: 0.7rem;">{{ $related->published_at->format('M d, Y') }}</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
                @endif
                
                <!-- Promo Widget -->
                <div class="card border-primary border-opacity-25 bg-primary-soft rounded-4">
                    <div class="card-body p-4 text-center">
                        <h6 class="fw-bold text-dark mb-2">Need to automate?</h6>
                        <p class="small text-secondary mb-3">Discover how we help engineering teams save 20+ hours per week.</p>
                        <a href="{{ url('/contact') }}" class="btn btn-primary btn-sm w-100">Book a Demo</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<style>
    /* Custom Styles for Blog Post */
    .bg-primary-soft { background-color: rgba(61, 187, 125, 0.1); }
    .text-primary-light { color: #86efac; }
    .text-secondary-dark { color: #334155; }
    .letter-spacing-1 { letter-spacing: 0.05em; }
    .letter-spacing-tight { letter-spacing: -0.025em; }
    .fs-sm { font-size: 0.875rem; }
    .fs-xs { font-size: 0.75rem; }
    .lh-tight { line-height: 1.1; }
    
    .hover-scale:hover { transform: scale(1.1); background-color: #f1f5f9; color: var(--primary) !important; border-color: var(--primary) !important; }
    
    .text-truncate-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* Content Typography */
    .blog-content p { margin-bottom: 1.25rem; line-height: 1.7; font-size: 1.05rem; }
    .blog-content h2 { 
        margin-top: 3.5rem; 
        margin-bottom: 1.25rem; 
        font-weight: 800; 
        color: #0F172A; 
        font-size: 1.8rem;
        letter-spacing: -0.025em;
        position: relative;
    }
    .blog-content h3 { 
        margin-top: 2.5rem; 
        margin-bottom: 1rem; 
        font-weight: 700; 
        color: #1E293B; 
        font-size: 1.4rem;
        letter-spacing: -0.01em;
    }
    .blog-content ul, .blog-content ol { margin-bottom: 1.75rem; padding-left: 1.5rem; color: #334155; }
    .blog-content li { margin-bottom: 0.5rem; }
    .blog-content blockquote { 
        border-left: 4px solid var(--primary); 
        padding-left: 1.5rem; 
        font-style: italic; 
        color: #475569;
        margin: 2.5rem 0;
        font-size: 1.1rem;
        background: linear-gradient(to right, rgba(248,250,252,1) 0%, rgba(255,255,255,0) 100%);
        padding-top: 1rem;
        padding-bottom: 1rem;
    }
    
    /* ToC Styles */
    .toc-nav { position: relative; }
    .toc-nav .nav-link {
        color: #94a3b8;
        padding: 0.35rem 0;
        padding-left: 1rem;
        transition: all 0.2s;
        font-size: 0.85rem;
        font-weight: 500;
        border-left: 2px solid transparent;
        margin-left: -2px; /* Pull back to overlap border */
    }
    .toc-nav .nav-link:hover {
        color: #475569;
    }
    .toc-nav .nav-link.active {
        color: var(--primary);
        border-left-color: var(--primary);
        font-weight: 600;
    }
    
    /* Sidebar adjustments */
    @media (max-width: 991.98px) {
        .sticky-top { position: relative !important; top: 0 !important; }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const content = document.querySelector('.blog-content');
        const toc = document.getElementById('toc');
        const headings = content.querySelectorAll('h2, h3');
        
        if (headings.length === 0) {
            toc.parentElement.style.display = 'none';
        } else {
            headings.forEach((heading, index) => {
                // Ensure heading has ID
                if (!heading.id) {
                    heading.id = 'section-' + index;
                }
                
                const link = document.createElement('a');
                link.className = 'nav-link text-truncate';
                link.href = '#' + heading.id;
                link.textContent = heading.innerText;
                
                // Indent H3s
                if (heading.tagName === 'H3') {
                    link.style.paddingLeft = '2.5rem';
                    link.style.fontSize = '0.8rem';
                }
                
                // Smooth scroll
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    document.querySelector(link.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
                
                toc.appendChild(link);
            });
            
            // ScrollSpy Logic
            const observerOptions = {
                root: null,
                rootMargin: '-10% 0px -70% 0px', // Trigger active state when section is near top
                threshold: 0
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const id = entry.target.id;
                        document.querySelectorAll('.toc-nav .nav-link').forEach(link => {
                            link.classList.remove('active');
                            if (link.getAttribute('href') === '#' + id) {
                                link.classList.add('active');
                            }
                        });
                    }
                });
            }, observerOptions);
            
            headings.forEach(heading => observer.observe(heading));
        }
    });
</script>
@endsection
