@extends('layouts.main')

@section('title', 'Index')

@section('content')

<section id="travels">
    <div class="container mt-5">
        @forelse($travels as $travel)
        <div class="card border-info mb-3 col-6 mx-auto text-center">
            <div class="card-header bg-transparent border-success">
                <a href="{{ route('travels.show', ['id' => $travel->id]) }}">Destinazione: {{$travel->destination}}</a>
            </div>
            <div class="card-body text-success">
              <h5 class="card-title">Mezzo di trasporto: {{$travel->transport}}</h5>
              <p class="card-text">Descrizione: {{$travel->description}}</p>
            </div>
            <div class="card-footer bg-transparent border-success">Prezzo: {{$travel->price}}€</div>
          </div>
        @empty
        <h1>Nessun dato</h1>
        @endforelse
    </div>
</section>

@endsection