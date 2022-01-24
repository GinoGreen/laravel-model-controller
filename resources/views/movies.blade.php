@extends('layouts.main')

@section('content')

   <div class="container">
      <h1>Film</h1>
      <div class="d-flex flex-wrap">
         @forelse ($movies as $movie)
            
            <div class="card m-2" style="width: 18rem;">
                  <div class="card-body">
                     <h4 class="card-title">{{ $movie->title }}</h4>
                     <h5 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h5>
                     <p class="card-text">Nazione: {{ $movie->nationality }}</p>
                     <p class="card-text">Data di uscita: {{ $movie->date }}</p>
                     <p class="card-text">Voto: {{ $movie->vote }}</p>
                  </div>
            </div>
         @empty
            <h3>Nessun film trovato</h3>
         @endforelse
      </div>
   </div>
   
@endsection