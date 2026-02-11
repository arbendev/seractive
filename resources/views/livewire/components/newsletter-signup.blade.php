<div>
    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form wire:submit="subscribe">
        <div class="input-group">
            <input type="email" wire:model="email" class="form-control bg-dark border-secondary text-light" placeholder="Email address" aria-label="Email address">
            <button class="btn btn-primary" type="submit">
                <span wire:loading.remove wire:target="subscribe">Subscribe</span>
                <span wire:loading wire:target="subscribe" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            </button>
        </div>
        @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
        <p class="text-light opacity-50 small mt-2" style="font-size: 0.75rem;">
            By subscribing, you agree to our Privacy Policy.
        </p>
    </form>
</div>
