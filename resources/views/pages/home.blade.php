@extends('layouts.ecommerce')

@section('title', 'Inicio')

@section('content')
  <div class=" max-w-7xl mx-auto">
    <x-sections.hero />
    <x-sections.sales />
    <x-sections.ads />
    <x-sections.best_seller/>
    <x-sections.contact />
  </div>
@endsection