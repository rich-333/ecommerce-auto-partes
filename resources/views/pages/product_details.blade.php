@extends('layouts.ecommerce')

@section('title', '$product->name')

@section('content')
  <div class=" max-w-7xl mx-auto mb-16">
    <header class=" mt-5 border-b-2 border-carousel-border pb-2.5"> 
      <h2 class=" text-3xl md:text-4xl font-medium">Zerex G05 Phosphate Free Antifreeze Coolant Concentrate 1 GA</h2>
      <div class=" flex gap-5 items-center mt-4">
        <div class=" flex gap-1.5">
          <img class=" w-4 h-4" src=" {{ asset('images/icons/star.svg') }} " alt="">
          <img class=" w-4 h-4" src=" {{ asset('images/icons/star.svg') }} " alt="">
        </div>
        <p class=" text-stock font-medium text-sm md:text-base">• En Stock</p>
      </div>
    </header>

    <div class=" grid grid-cols-2 my-4">
      <x-sections.product_images />
      <x-sections.product_info />
    </div>

    <div class=" flex justify-between items-center my-10">
      <x-services-shipping
        icon="images/icons/truck.svg"
        title="Envio rapido"
        description="Entrega segura y rápida a todo el país en 24-48 horas"
      />

      <x-services-shipping
        icon="images/icons/return.svg"
        title="Devolución Fácil"
        description="30 días para devolver tu compra sin complicaciones"
      />

      <x-services-shipping
        icon="images/icons/warranty.svg"
        title="Política de garantía"
        description="Garantía del fabricante en todos nuestros productos"
      />
    </div>

    <div class="mb-8">
      <h4 class=" font-medium text-discount">Descripcion</h4>
      <hr class=" border-black/20 my-2.5">

      <div class=" flex flex-col gap-2.5">
        <p class=" font-normal">
          El Zerex G05 es un refrigerante concentrado sin fosfatos de alta calidad, diseñado específicamente para vehículos que requieren protección contra la corrosión y el sobrecalentamiento. Este anticongelante de primera calidad ofrece una protección superior contra la congelación en invierno y el sobrecalentamiento en verano.
        </p>
        <p class=" font-normal">
          Diseñado con tecnología avanzada, este refrigerante proporciona una protección excepcional para el sistema de enfriamiento de tu vehículo. Su fórmula especial no solo mantiene la temperatura óptima del motor, sino que también forma una capa protectora en las superficies metálicas, prolongando significativamente la vida útil de los componentes. Ideal para vehículos modernos, el Zerex G05 garantiza un rendimiento confiable en las condiciones más exigentes, ofreciendo tranquilidad y seguridad en cada viaje.
        </p>
      </div>

    </div>

    <div>
      <h4 class=" text-lg font-medium">Productos relacionados</h4>
      <x-sections.related_products/>
    </div>

  </div>
@endsection