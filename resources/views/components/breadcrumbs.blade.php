@unless(Route::is('index'))
    <nav aria-label="breadcrumb" class="pt-4 pb-0 {{ $class ?? '' }}" style="{{ $style ?? '' }}">
        <div class="container-xl">
            <ol class="breadcrumb mb-0" style="font-size: 0.8rem;">
                <li class="breadcrumb-item"><a href="{{ route('index') }}" class="text-decoration-none text-primary">Home</a></li>
                @php
                    $segments = Request::segments();
                    $url = '';
                @endphp
                @foreach($segments as $segment)
                    @php
                        $url .= '/' . $segment;
                        $label = ucwords(str_replace('-', ' ', $segment));
                    @endphp
                    @if($loop->last)
                        <li class="breadcrumb-item active text-muted" aria-current="page">{{ $label }}</li>
                    @else
                        <li class="breadcrumb-item"><a href="{{ url($url) }}" class="text-decoration-none text-primary">{{ $label }}</a></li>
                    @endif
                @endforeach
            </ol>
        </div>
    </nav>
@endunless
