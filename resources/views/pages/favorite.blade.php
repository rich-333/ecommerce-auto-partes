@extends('layouts.ecommerce')

@section('title', 'Favoritos')

@section('content')
  <div class="max-w-7xl mx-auto my-16">

    @if ($favorito->isNotEmpty())
      <div>
        <x-sections.favorite_table :favorito="$favorito"/>
      </div>

      <div class=" mt-8">
        <x-buttons.limpiar_todo />
      </div>
    @else
      <div>
        <x-empty-page 
          icon="images/icons/favorite.svg" 
          description="Tu lista de favoritos esta vacio actualmente."
        />
      </div>
    @endif

  </div>
@endsection