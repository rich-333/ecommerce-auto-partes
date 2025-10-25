@extends('layouts.ecommerce')

@section('title', 'Productos')

@section('content')
  <div class=" max-w-7xl mx-auto mb-16">
    <h1 class=" font-semibold text-4xl md:text-5xl text-center py-10">Productos</h1>
    <div class=" grid grid-cols-1 md:grid-cols-[300px_1fr] gap-28">
      <x-sections.filters />
      <x-sections.product_list />
    </div>
  </div>
@endsection 
