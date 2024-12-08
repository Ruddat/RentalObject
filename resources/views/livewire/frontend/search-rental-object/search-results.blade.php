<div class="search-results">
    <h2>Suchergebnisse ({{ count($results) }})</h2>

    @if($results->isEmpty())
        <p>Keine Ergebnisse gefunden.</p>
    @else
        <div class="row">
            @foreach($results as $result)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $result->name }}</h5>
                            <p class="card-text">
                                Preis: {{ $result->price }} €<br>
                                Größe: {{ $result->area }} m²<br>
                                Zimmer: {{ $result->rooms }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
