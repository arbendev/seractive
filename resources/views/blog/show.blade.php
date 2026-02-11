@extends('layouts.app')

@section('content')
<div class="position-relative pt-5 pb-5 bg-dark text-white overflow-hidden">
    <div class="position-absolute top-0 start-0 w-100 h-100 opacity-25" style="background-image: url('{{ $post->featured_image }}'); background-size: cover; background-position: center; filter: blur(20px);"></div>
    <div class="container-xl position-relative pt-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <div class="mb-4">
                    @foreach($post->categories as $category)
                        <a href="{{ route('blog.index', ['category' => $category->slug]) }}" class="badge bg-white text-dark rounded-pill px-3 py-2 text-decoration-none me-1">{{ $category->name }}</a>
                    @endforeach
                </div>
                <h1 class="display-3 fw-bold mb-4">{{ $post->title }}</h1>
                <div class="d-flex align-items-center justify-content-center gap-4 text-white-50">
                    <div class="d-flex align-items-center">
                        <div class="avatar me-2 bg-white text-dark rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width: 32px; height: 32px;">
                            {{ substr($post->user->name, 0, 1) }}
                        </div>
                        {{ $post->user->name }}
                    </div>
                    <div>&bull;</div>
                    <div>{{ $post->published_at->format('F d, Y') }}</div>
                    <div>&bull;</div>
                    <div>5 min read</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-xl py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-0 shadow-lg rounded-4 mt-n5 overflow-hidden mb-5">
                <img src="{{ $post->featured_image }}" class="w-100" alt="{{ $post->title }}" style="max-height: 500px; object-fit: cover;">
                <div class="card-body p-5">
                    <article class="blog-content fs-5 lh-lg text-secondary">
                        {!! nl2br(e($post->content)) !!}
                    </article>
                    
                    <div class="mt-5 pt-4 border-top">
                        <div class="d-flex flex-wrap gap-2 align-items-center">
                            <span class="fw-bold text-dark me-2">Tags:</span>
                            @foreach($post->tags as $tag)
                                <span class="badge bg-light text-secondary border rounded-pill px-3 py-2 fw-normal">#{{ $tag->name }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            @if($relatedPosts->count() > 0)
            <div class="mb-5">
                <h3 class="fw-bold mb-4">You might also like</h3>
                <div class="row g-4">
                    @foreach($relatedPosts as $related)
                    <div class="col-md-6">
                        <div class="card h-100 border-0 bg-light rounded-4 overflow-hidden">
                            <div class="row g-0 h-100">
                                <div class="col-4">
                                    <img src="{{ $related->featured_image }}" class="w-100 h-100 object-fit-cover" alt="{{ $related->title }}">
                                </div>
                                <div class="col-8 p-3 d-flex flex-column justify-content-center">
                                    <h5 class="card-title fw-bold fs-6 mb-2"><a href="{{ route('blog.show', $related) }}" class="text-decoration-none text-dark">{{ $related->title }}</a></h5>
                                    <div class="small text-muted">{{ $related->published_at->format('M d, Y') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
            
            <div class="d-flex justify-content-center">
                <a href="{{ route('blog.index') }}" class="btn btn-outline-primary rounded-pill px-5"><i class="bi bi-arrow-left me-2"></i> Back to Blog</a>
            </div>
        </div>
    </div>
</div>

<style>
    .mt-n5 { margin-top: -3rem; }
    .blog-content p { margin-bottom: 1.5rem; }
    .blog-content h2 { margin-top: 2rem; margin-bottom: 1rem; font-weight: 700; color: #333; }
    .blog-content blockquote { border-left: 4px solid #0d6efd; padding-left: 1rem; font-style: italic; color: #555; }
</style>
@endsection
