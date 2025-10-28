@props(['producto' => null])

@if($producto)
<article class=" w-60 h-112">

  <div class=" relative h-60">

    @php
      $imagenPrincipal = $producto->imagenes->firstWhere('es_principal', true) ?? $producto->imagenes->first() ?? null;
    @endphp
    <img 
      class="w-full h-full object-cover rounded-lg border-carousel-border border-2" 
      src=" {{ $imagenPrincipal ? $imagenPrincipal->url_imagen : asset('images/ejem.avg') }} " 
      alt=" {{ $producto->nombre }} "
    >

    @if ($producto->descuentos && $producto->descuentos->activo)
      @if ($producto->descuentos->tipo === 'porcentaje')
        <p class=" absolute top-3 left-3 bg-discount w-10 h-6 rounded-sm text-center font-semibold text-xs md:text-sm text-white">
          {{ number_format($producto->descuentos->valor, 0) }} %
        </p>
        <x-discount 
          :percentage = "$producto->descuentos->valor"
        />
      @endif
    @endif

    @auth
      <form id="favoritoForm-{{ $producto->id_producto }}" data-id="{{ $producto->id_producto }}" action="{{ route('favorito.add', $producto->id_producto) }}" method="POST">
        @csrf
        <button
          type="submit"
          class="absolute top-3 right-3 p-1 rounded-full transition-all duration-200 flex items-center justify-center bg-white/90
                hover:bg-discount hover:scale-110 active:scale-95 group cursor-pointer"
        >
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path class="stroke-black group-hover:stroke-white transition-all duration-200" d="M12 21C11.7143 21 11.5238 20.9016 11.2381 20.7049C9.61905 19.918 8.19048 18.9344 6.85714 17.8525C4.47619 15.8852 2 12.8361 2 8.70492C2 5.55738 4.47619 3.09836 7.42857 3.09836C9.2381 3.09836 10.9524 4.08197 12 5.45902C13.0476 3.98361 14.6667 3 16.5714 3C19.619 3 22 5.55738 22 8.60656C22 12.7377 19.5238 15.8852 17.1429 17.7541C15.9048 18.8361 14.4762 19.7213 12.9524 20.5082H12.8571C12.2857 21 12.0952 21 12 21Z" stroke="black" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
      </form>
    @endauth

    @guest
      <a href="{{ route('register.form') }}" 
        class="absolute top-3 right-3 p-1 rounded-full transition-all duration-200 flex items-center justify-center bg-white/90
                hover:bg-discount hover:scale-110 active:scale-95 group cursor-pointer"
      >
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path class="stroke-black group-hover:stroke-white transition-all duration-200" d="M12 21C11.7143 21 11.5238 20.9016 11.2381 20.7049C9.61905 19.918 8.19048 18.9344 6.85714 17.8525C4.47619 15.8852 2 12.8361 2 8.70492C2 5.55738 4.47619 3.09836 7.42857 3.09836C9.2381 3.09836 10.9524 4.08197 12 5.45902C13.0476 3.98361 14.6667 3 16.5714 3C19.619 3 22 5.55738 22 8.60656C22 12.7377 19.5238 15.8852 17.1429 17.7541C15.9048 18.8361 14.4762 19.7213 12.9524 20.5082H12.8571C12.2857 21 12.0952 21 12 21Z" stroke="black" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </a>
    @endguest

    <a
      href="{{ route('producto.detalle', $producto->id_producto) }}"
      class="absolute top-12 right-3 p-1 rounded-full bg-white/90 backdrop-blur-sm shadow-sm
            hover:bg-discount hover:text-white hover:scale-110 active:scale-95 transition-all duration-200 group"
    >
      <svg class="stroke-black group-hover:stroke-white transition-all duration-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
        <path  stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
      </svg>
    </a>

  </div>

  <div class="py-5">
    <header class="flex flex-col gap-3 mb-3">
      <div class=" flex gap-2">
        @php
          $promedio = round($producto->calificaciones->avg('puntuacion'), 1);
        @endphp
        <img src=" {{ asset('images/icons/star.svg') }} " alt="Estrella">
        <span class="text-sm font-medium">{{ $promedio ?: 'N/A' }}</span>
      </div>
      <h3 class=" font-medium text-sm h-10 overflow-hidden line-clamp-2">{{ $producto->nombre }}</h3>
      <div class="flex justify-between items-center">
        <div class="flex gap-1 items-end">
          @php
            $precioFinal = $producto->precio;
            if ($producto->descuentos && $producto->descuentos->activo) {
              $precioFinal -= ($producto->precio * $producto->descuentos->valor / 100);
            }
            
          @endphp

          @if($producto->descuentos && $producto->descuentos->activo)
            <x-price_new
              priceNew="{{ number_format($precioFinal, 2) }}"
            />
          @endif
            <x-price_base
              priceBase="{{ number_format($producto->precio, 2) }}"
            />
        </div>

        @auth
          <form action="{{ route('carrito.add', $producto->id_producto) }}" method="POST">
            @csrf
            <button type="submit" class="bg-discount rounded-lg p-2 transition-all duration-200 hover:scale-110 active:scale-95 hover:shadow-md cursor-pointer">
              <img src="{{ asset('images/icons/cart.svg') }}" alt="">
            </button>
          </form>
        @endauth

        @guest
          <a href="{{ route('register.form') }}" class="bg-discount rounded-lg p-2 transition-all duration-200 hover:scale-110 active:scale-95 hover:shadow-md cursor-pointer">
            <img src="{{ asset('images/icons/cart.svg') }}" alt="">
          </a>
        @endguest
      </div>
      <div class=" border-1 border-carousel-border w-full"></div>
    </header>

    <footer class="flex flex-col gap-2">
      <div class=" border-2 border-red-500"></div>
      <div class="flex justify-between text-xs font-normal">
        <p>Disponible: <span class=" font-semibold">{{ $producto->stock }}</span></p>
        <p>Vendido: <span class=" font-semibold">29</span></p>
      </div>
    </footer>
  </div>

</article>
@endif
