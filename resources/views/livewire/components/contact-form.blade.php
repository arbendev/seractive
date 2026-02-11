<div class="form-card">
    @if ($submitted)
        <div class="text-center py-5">
            <i class="bi bi-check-circle-fill text-success display-1 mb-4"></i>
            <h3 class="fw-bold mb-3">Message Received</h3>
            <p class="text-secondary lead">Thank you for reaching out. We'll be in touch shortly.</p>
            <button wire:click="$set('submitted', false)" class="btn btn-outline-primary mt-3">Send another message</button>
        </div>
    @else
        <form wire:submit.prevent="submit">
            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="formName" wire:model="name" placeholder="Your name">
                        <label for="formName">Name</label>
                        @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="formEmail" wire:model="email" placeholder="you@company.com">
                        <label for="formEmail">Work Email</label>
                         @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                </div>
            </div>

            <!-- Company -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control @error('company') is-invalid @enderror" id="formCompany" wire:model="company" placeholder="Acme Corp">
                <label for="formCompany">Company / Organization</label>
                 @error('company') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <!-- Industry -->
            <div class="form-floating mb-4">
                <select class="form-select @error('industry') is-invalid @enderror" id="formIndustry" wire:model="industry">
                    <option selected value="">Select industry</option>
                    <option>Aviation</option>
                    <option>Finance / Insurance</option>
                    <option>Manufacturing</option>
                    <option>Retail / E-commerce</option>
                    <option>Logistics</option>
                    <option>Other</option>
                </select>
                <label for="formIndustry">Industry</label>
                 @error('industry') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <!-- Goals (Choice Cards) -->
            <label class="form-label fw-bold mb-3 d-block text-secondary">What is your primary goal?</label>
            <div class="row g-2 mb-4">
                @php
                    $goals = [
                        'Reduce manual work',
                        'Improve visibility/metrics',
                        'Automate onboarding',
                        'Scale operations',
                        'Evaluate AI feasibility',
                        'Other / Unsure'
                    ];
                @endphp

                @foreach ($goals as $index => $goalOption)
                    <div class="col-sm-6">
                        <input type="radio" class="btn-check" name="goal" id="goal{{ $index }}" value="{{ $goalOption }}" wire:model="goal" autocomplete="off">
                        <label class="choice-card-label @error('goal') border-danger @enderror" for="goal{{ $index }}">
                            {{ $goalOption }}
                        </label>
                    </div>
                @endforeach
                 @error('goal') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
            </div>

            <!-- Context -->
            <div class="form-floating mb-4">
                <textarea class="form-control @error('context') is-invalid @enderror" placeholder="Context" id="formContext" wire:model="context" style="height: 100px"></textarea>
                <label for="formContext">Brief context (optional)</label>
                 @error('context') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="d-grid exception">
                <button type="submit" class="btn btn-primary py-3 fw-bold" wire:loading.attr="disabled">
                    <span wire:loading.remove>Submit & start conversation</span>
                    <span wire:loading>Sending...</span>
                </button>
            </div>
        </form>
    @endif
</div>
