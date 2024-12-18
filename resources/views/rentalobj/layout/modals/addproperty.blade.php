<!-- Modal für Vorauswahl -->
<div class="modal fade" id="insertModal" tabindex="-1" aria-labelledby="insertModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="insertModalLabel">Inserieren ab 0 €</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Schließen"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row g-3">
                        <!-- Kaufen -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="box-service-new h-100 d-flex flex-column align-items-center text-center p-3 border rounded hover-container">
                                <div class="image mb-3">
                                    <img class="img-fluid hover-horizontal" src="{{ asset('/build/images/service/home-1.png') }}" alt="Kaufen">
                                </div>
                                <h5 class="title">Kaufen</h5>
                                <p class="description">Sie möchten eine Immobilie kaufen?</p>
                                <a href="{{ route('multi-step') }}" class="btn btn-primary mt-auto">Weiter</a>
                            </div>
                        </div>
                        <!-- Verkaufen -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="box-service-new h-100 d-flex flex-column align-items-center text-center p-3 border rounded hover-container">
                                <div class="image mb-3">
                                    <img class="img-fluid hover-horizontal" src="{{ asset('/build/images/service/home-2.png') }}" alt="Verkaufen">
                                </div>
                                <h5 class="title">Verkaufen</h5>
                                <p class="description">Sie möchten eine Immobilie verkaufen?</p>
                                <a href="{{ route('multi-step') }}" class="btn btn-primary mt-auto">Weiter</a>
                            </div>
                        </div>
                        <!-- Mieten -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="box-service-new h-100 d-flex flex-column align-items-center text-center p-3 border rounded hover-container">
                                <div class="image mb-3">
                                    <img class="img-fluid hover-horizontal" src="{{ asset('/build/images/service/home-3.png') }}" alt="Mieten">
                                </div>
                                <h5 class="title">Mieten</h5>
                                <p class="description">Sie möchten eine Immobilie mieten?</p>
                                <a href="{{ route('multi-step') }}" class="btn btn-primary mt-auto">Weiter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .box-service-new {
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.box-service-new .image {
    display: block;
    transition: all 0.8s ease;
    display: inline-block;
}

/* Keyframes für mehrfache Rotation */
@keyframes rotateMultiple {
    0% {
        transform: rotateY(0deg);
    }
    100% {
        transform: rotateY(720deg); /* 2 volle Umdrehungen */
    }
}

/* Hover-Effekt */
.hover-container:hover .hover-horizontal {
    animation: rotateMultiple 1.2s ease-in-out; /* Animationsdauer 1.5 Sekunden */
    transform-origin: center; /* Drehpunkt in der Mitte */
}

/* Standardstil für das Bild */
.hover-horizontal {
    transition: transform 0.3s ease-in-out; /* Optional: sanfter Übergang */
}


.hover-rotate {
    transition: transform 0.6s ease-in-out;
    transform-origin: center;
}

.hover-rotate:hover {
    transform: rotate(360deg);
}
</style>
