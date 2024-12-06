<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exposé</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1, h2 { text-align: center; }
        .section { margin-bottom: 20px; }
        .photos img { width: 100px; margin: 5px; }
    </style>
</head>
<body>
    <h1>{{ $property->title }}</h1>
    <p>{{ $property->street }}, {{ $property->city }}, {{ $property->zip }}</p>

    @if(in_array('details', $selectedSections))
        <div class="section">
            <h2>Details</h2>
            <p>Fläche: {{ $property->details->area }} m²</p>
            <p>Zimmer: {{ $property->details->rooms }}</p>
        </div>
    @endif

    @if(in_array('prices', $selectedSections))
        <div class="section">
            <h2>Preise</h2>
            <p>Kaufpreis: {{ number_format($property->prices->purchase_price, 2, ',', '.') }} €</p>
        </div>
    @endif

    @if(in_array('photos', $selectedSections))
        <div class="section photos">
            <h2>Fotos</h2>
            @foreach($filteredPhotos as $photo)
                <img src="{{ Storage::url($photo->file_path) }}" alt="Photo">
            @endforeach
        </div>
    @endif

    @if(in_array('energy', $selectedSections))
        <div class="section">
            <h2>Energieausweis</h2>
            <p>Verbrauch: {{ $property->energyCertificates->energy_consumption }} kWh/m²</p>
        </div>
    @endif
</body>
</html>
