@extends('layouts.web')

@section('content')
    <h1>HomePage</h1>
    <div class="container">
        <div class="row">
            @foreach ($trains as $train)
                <div class="col-4">
                    <div class="card">
                        <div>
                            <strong>Compagnia:</strong> {{$train->azienda}}
                        </div>
                        <div>
                            <strong>Stazione di Partenza:</strong> {{ $train->stazione_di_partenza }}
                        </div>
                        <div>
                            <strong>Stazione di Arrivo:</strong> {{ $train->stazione_di_arrivo }}
                        </div>
                        <div>
                            <strong>Orario di Partenza:</strong> {{ $train->orario_di_partenza }}
                        </div>
                        <div>
                            <strong>Orario di Arrivo:</strong> {{ $train->orario_di_arrivo }}
                        </div>
                        <div>
                            <strong>Codice Treno:</strong> {{ $train->codice_treno }}
                        </div>
                        <div>
                            <strong>Numero Carrozze:</strong> {{ $train->numero_carrozze }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
