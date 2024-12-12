<!-- Modal für Vorauswahl -->
<div class="modal fade" id="insertModal" tabindex="-1" aria-labelledby="insertModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered"> <!-- Hinzugefügt: modal-dialog-centered -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="insertModalLabel">Inserieren ab 0 €</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Schließen"></button>
            </div>
            <div class="modal-body">
                <div class="tf-grid-layout md-col-3 wow fadeInUp" style="visibility: visible;">
                    <!-- Kaufen -->
                    <div class="box-service">
                        <div class="image">
                            <img class="lazyload" data-src="{{ asset('/build/images/service/home-1.png') }}" src="{{ asset('/build/images/service/home-1.png') }}" alt="Kaufen">
                        </div>
                        <div class="content text-center">
                            <h5 class="title">Kaufen</h5>
                            <p class="description">Sie möchten eine Immobilie kaufen?</p>
                            <a href="{{ route('multi-step') }}" class="tf-btn btn-line">Weiter <span class="icon icon-arrow-right2"></span></a>
                        </div>
                    </div>
                    <!-- Verkaufen -->
                    <div class="box-service">

                        <div class="image">
                            <img class="lazyload" data-src="{{ asset('/build/images/service/home-2.png') }}" src="{{ asset('/build/images/service/home-2.png') }}" alt="Verkaufen">
                        </div>
                        <div class="content text-center">
                            <h5 class="title">Verkaufen</h5>
                            <p class="description">Sie möchten eine Immobilie verkaufen?</p>
                            <a href="{{ route('multi-step') }}" class="tf-btn btn-line">Weiter <span class="icon icon-arrow-right2"></span></a>
                        </div>

                    </div>
                    <!-- Mieten -->
                    <div class="box-service">
                        <div class="image">
                            <img class="lazyload" data-src="{{ asset('/build/images/service/home-3.png') }}" src="{{ asset('/build/images/service/home-3.png') }}" alt="Mieten">
                        </div>
                        <div class="content text-center">
                            <h5 class="title">Mieten</h5>
                            <p class="description">Sie möchten eine Immobilie mieten?</p>
                            <a href="{{ route('multi-step') }}" class="tf-btn btn-line">Weiter <span class="icon icon-arrow-right2"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
