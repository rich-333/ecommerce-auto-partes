@extends('layouts.ecommerce')

@section('title', 'Favoritos')

@section('content')
  <div class="max-w-7xl mx-auto my-16">

    <div>
      <x-sections.favorite_table/>
    </div>

    <div class=" mt-8">
      <x-buttons.limpiar_todo />
    </div>

    <div>
      <x-empty-page 
        icon="images/icons/favorite.svg" 
        description="Tu lista de favoritos esta vacio actualmente."
      />
    </div>
  </div>
@endsection