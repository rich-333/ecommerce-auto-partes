@extends('layouts.ecommerce')

@section('title', 'Carrito')

@section('content')
  <div class=" max-w-7xl mx-auto my-16">
    <div class=" grid grid-cols-1 lg:grid-cols-[950px_1fr] gap-8">
      <x-sections.product_table/>
      <x-sections.cart_totals/>
    </div>

    <div>
      <x-buttons.limpiar_todo />
    </div>

    <div>
      <x-empty-page 
        icon="images/icons/cart.svg" 
        description="Tu carrito esta vacio actualmente."
      />

    </div>
  </div>
@endsection