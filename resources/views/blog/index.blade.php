@extends('layouts.app')

@section('content')
<div class="py-5 bg-light">
    <div class="container-xl pt-5">
        <div class="row mb-5 align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold text-dark">Our Latest Thoughts</h1>
                <p class="lead text-muted">Insights, tutorials, and news from the Seractive team.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <form action="{{ route('blog.index') }}" method="GET" class="d-inline-block">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control border-0 shadow-sm" placeholder="Search articles..." value="{{ request('search') }}">
                        <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>
        </div>

        @if($featuredPost)
        <div class="card border-0 shadow-lg overflow-hidden mb-5 rounded-4">
            <div class="row g-0">
                <div class="col-lg-7 position-relative" style="min-height: 400px;">
                    <img src="{{ $featuredPost->featured_image }}" class="w-100 h-100 object-fit-cover position-absolute top-0 start-0" alt="{{ $featuredPost->title }}">
                </div>
                <div class="col-lg-5 p-5 d-flex flex-column justify-content-center bg-white">
                    <div class="mb-3">
                        @foreach($featuredPost->categories as $category)
                            <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-2 mb-2 me-1">{{ $category->name }}</span>
                        @endforeach
                    </div>
                    <h2 class="card-title h1 fw-bold mb-3"><a href="{{ route('blog.show', $featuredPost) }}" class="text-decoration-none text-dark">{{ $featuredPost->title }}</a></h2>
                    <p class="card-text text-muted mb-4">{{ Str::limit($featuredPost->short_description, 150) }}</p>
                    <div class="d-flex align-items-center mt-auto">
                        <div class="avatar me-3 bg-secondary-subtle rounded-circle d-flex align-items-center justify-content-center text-secondary fw-bold" style="width: 48px; height: 48px;">
                            {{ substr($featuredPost->user->name, 0, 1) }}
                        </div>
                        <div>
                            <div class="fw-bold">{{ $featuredPost->user->name }}</div>
                            <div class="small text-muted">{{ $featuredPost->published_at->format('M d, Y') }} &bull; 5 min read</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <div class="d-flex flex-wrap gap-2 mb-5 justify-content-center">
            <a href="{{ route('blog.index') }}" class="btn btn-{{ request('category') ? 'outline-secondary' : 'dark' }} rounded-pill px-4">All</a>
            @foreach($categories as $category)
                <a href="{{ route('blog.index', ['category' => $category->slug]) }}" class="btn btn-{{ request('category') == $category->slug ? 'dark' : 'outline-secondary' }} rounded-pill px-4 border-0 bg-white shadow-sm">{{ $category->name }}</a>
            @endforeach
        </div>

        <div class="row g-4 mb-5">
            @foreach($posts as $post)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden hover-shadow transition-all">
                    <div class="position-relative">
                        <img src="{{ $post->featured_image }}" class="card-img-top object-fit-cover" alt="{{ $post->title }}" style="height: 240px;">
                        <span class="position-absolute top-0 end-0 m-3 badge bg-white text-dark shadow-sm rounded-pill">{{ $post->categories->first()->name ?? 'Blog' }}</span>
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="mb-2 text-muted small">{{ $post->published_at->format('M d, Y') }}</div>
                        <h3 class="card-title h5 fw-bold mb-3"><a href="{{ route('blog.show', $post) }}" class="text-decoration-none text-dark stretched-link">{{ $post->title }}</a></h3>
                        <p class="card-text text-muted small mb-4 flex-grow-1">{{ Str::limit($post->short_description, 100) }}</p>
                        <div class="d-flex align-items-center">
                             <div class="avatar me-2 bg-light rounded-circle d-flex align-items-center justify-content-center text-muted small" style="width: 32px; height: 32px;">
                                {{ substr($post->user->name, 0, 1) }}
                            </div>
                            <span class="small text-muted fw-medium">{{ $post->user->name }}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
</div>

<style>
    .hover-shadow:hover {
        transform: translateY(-5px);
        box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
    }
    .transition-all {
        transition: all 0.3s ease;
    }
</style>
@endsection
