<section class="py-5 my-5 case-study">
  <div class="container-xl">
    @if($caseStudies->isNotEmpty())
        <div id="caseStudyCarousel" class="carousel slide">
            <div class="carousel-inner">
            @if($caseStudies->count() > 1)
                <div class="position-absolute top-0 start-0 w-100" style="z-index: 10; pointer-events: none;">
                    <div class="row align-items-start g-5">
                      <div class="col-lg-6 offset-lg-6">
                        <div class="d-flex justify-content-end gap-2 mb-3 pe-auto" style="pointer-events: auto;">
                            <button class="btn btn-outline-primary rounded-circle p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" type="button" data-bs-target="#caseStudyCarousel" data-bs-slide="prev">
                                <i class="bi bi-chevron-left small"></i>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="btn btn-outline-primary rounded-circle p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" type="button" data-bs-target="#caseStudyCarousel" data-bs-slide="next">
                                <i class="bi bi-chevron-right small"></i>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                      </div>
                    </div>
                </div>
            @endif

            <div class="carousel-inner">
                @foreach($caseStudies as $caseStudy)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <div class="row align-items-start g-5">
                          <div class="col-lg-6 order-lg-2">
                            <!-- Spacer to preserve layout height since buttons are now absolute -->
                            <div class="d-flex justify-content-end gap-2 mb-3" style="height: 32px;"></div>
                            
                            @if($caseStudy->featured_image)
                                <img src="{{ Str::startsWith($caseStudy->featured_image, ['http', '//']) ? $caseStudy->featured_image : asset('storage/' . $caseStudy->featured_image) }}" class="img-fluid case-study-img" alt="{{ $caseStudy->title }}">
                            @else
                                <img src="{{ asset('img/case-study.jpg') }}" class="img-fluid case-study-img" alt="{{ $caseStudy->title }}">
                            @endif
                          </div>
                          <div class="col-lg-6 order-lg-1">
                            <span class="text-primary fw-bold text-uppercase small mb-2 d-block">Case Study</span>
                            <h3 class="display-6 fw-bold mb-4">{{ $caseStudy->title }}</h3>
                            <p class="text-secondary lead mb-4">
                              {{ Str::limit($caseStudy->solution, 200) }}
                            </p>
                            @if(is_array($caseStudy->key_metrics))
                                <ul class="list-unstyled mb-4">
                                    @foreach($caseStudy->key_metrics as $key => $value)
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> <strong>{{ $key }}:</strong> {{ $value }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            <a href="#" class="btn btn-outline-primary">Read the full story</a>
                          </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
        </div>
    @endif
  </div>
</section>
