<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>trains-laravel</title>
</head>
<body>
    <div class="container my-3">
        <h1>TRENI</h1>
        <div class="row g-4">
            <div class="col">
                <div class="container">
                    @foreach ($trains as $train)
                        <div class="card">
                            <span>Compagnia: <strong>{{$train->company}}</strong></span>
                            <span>Stazione di partenza: <strong>{{$train->departure_station}}</strong></span>
                            <span>Stazione di arrivo: <strong>{{$train->arrival_station}}</strong></span>
                            <span>Orario di partenza: <strong>{{$train->departure_time}}</strong></span>
                            <span>Orario di arrivo: <strong>{{$train->arrival_time}}</strong></span>
                            <span>Codice treno: <strong>{{$train->train_code}}</strong></span>
                            <span>Numero di carrozze: <strong>{{$train->number_of_carriages}}</strong></span>
                            <span>In orario: <strong>{{ $train->on_time ? 'Sì' : 'No' }}</strong></span>
                            <span>Cancellato: <strong>{{ $train->canceled ? 'Sì' : 'No' }}</strong></span>
                        </div>  
                    @endforeach
                </div>
            </div>
        </div>
    
    </div>
</body>
</html>
