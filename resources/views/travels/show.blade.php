@extends('layouts.main')

@section('title', $travel->destination)

@section('content')

<section id="travel">
    <div class="container mt-5">
        <div class="card border-info mb-3 col-6 mx-auto text-center">
            <div class="card-header bg-transparent border-success">
                Destinazione: {{$travel->destination}}
            </div>
            <div class="card-body text-success">
              <h5 class="card-title">Mezzo di trasporto: {{$travel->transport}}</h5>
              <p class="card-text">Descrizione: {{$travel->description}}</p>
            </div>
            <div class="card-footer bg-transparent border-success">Prezzo: {{$travel->price}}€</div>
        </div>
    </div>
</section>

@endsection