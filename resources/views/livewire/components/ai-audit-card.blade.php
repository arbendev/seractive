<div class="bg-white p-4 p-md-5 rounded-4 shadow-lg text-dark">
    @if ($submitted)
        <div class="text-center py-4">
            <i class="bi bi-check-circle-fill text-success display-4 mb-3"></i>
            <h4 class="fw-bold mb-2">Request Received</h4>
            <p class="text-secondary small mb-3">We'll be in touch shortly to schedule your audit.</p>
            <button wire:click="$set('submitted', false)" class="btn btn-sm btn-outline-primary">Request another</button>
        </div>
    @else
        <h3 class="fw-bold mb-2">Get your AI audit</h3>
        <p class="text-secondary mb-4 small">See where automation can save you money.</p>
        <form wire:submit.prevent="submit">
            <div class="mb-3">
                <label for="workEmail" class="form-label small fw-bold text-secondary">Work Email</label>
                <input type="email" class="form-control bg-light border-light @error('email') is-invalid @enderror" id="workEmail" wire:model="email" placeholder="name@company.com">
                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="mb-4">
                <label for="companyName" class="form-label small fw-bold text-secondary">Company Name</label>
                <input type="text" class="form-control bg-light border-light" id="companyName" wire:model="company" placeholder="Acme Corp">
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary py-2 fw-semibold" wire:loading.attr="disabled">
                    <span wire:loading.remove>Book Strategy Call</span>
                    <span wire:loading>Processing...</span>
                </button>
            </div>
            <p class="text-center text-muted mt-3 mb-0 fs-xs">
                No commitment required.
            </p>
        </form>
    @endif
</div>
