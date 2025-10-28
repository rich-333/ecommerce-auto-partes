@props(['carrito'])

<section>
  <table class=" w-full">
    <thead class=" border-b-2 border-carousel-border">
      <tr>
        <th>Producto</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Subtotal</th>
        <th></th>
      </tr>
    </thead>

    <tbody>

      @foreach ($carrito as $cart)
        <tr class="hover:bg-slate-200 transition-colors duration-150 cursor-pointer group">
          <td class=" flex items-center gap-x-5">
            @foreach ($cart->producto->imagenes as $img)
              @if ($img->es_principal)
                <img  class="w-20 h-20 border-2 border-carousel-border rounded-lg transition-transform duration-300 hover:scale-105" src=" {{ $img->url_imagen }} " alt="">
              @endif
            @endforeach
            
            <p class=" font-medium">{{ $cart->producto->nombre }}</p>
          </td>

          @php
            $precioFinal = $cart->producto->precio;
            if ($cart->producto->descuentos && $cart->producto->descuentos->activo) {
              $precioFinal -= ($cart->producto->precio * $cart->producto->descuentos->valor / 100);
            }
            
          @endphp
          <td class=" font-normal" data-precio="{{ $precioFinal }}">

            @if($cart->producto->descuentos && $cart->producto->descuentos->activo)
              <x-price_new
                priceNew="{{ number_format($precioFinal, 2) }}"
              />
            @endif

            @if($cart->producto->precio != $precioFinal)
              <x-price_base
                priceBase="{{ number_format($cart->producto->precio, 2) }}"
              />
            @else
              {{ $cart->producto->precio }}
            @endif
          </td>
          <td>
            <x-quantity :cantidad="$cart->cantidad" :idCarrito="$cart->id_carrito" :precio="$precioFinal"/>
          </td>
          <td class=" font-semibold">
            {{ number_format($cart->cantidad * $precioFinal, 2) }}
          </td>
          <td>
            <form action="{{ route('carrito.delete', $cart->id_carrito) }}" method="POST">
              @csrf
              @method('DELETE')
              <button 
                type="submit"   
                class="bg-white rounded-sm border-2 border-carousel-border p-1 shadow-2xs 
                cursor-pointer transition-all duration-200 hover:bg-red-400 
                active:scale-95 focus:ring-2 focus:ring-red-700 "
              >
                <img src="{{ asset('images/icons/remove.svg') }}" alt="Eliminar">
              </button>
            </form>
          </td>
        </tr>
      @endforeach

    </tbody>
  </table>
</section>

<style>
  table thead tr th {
    padding: 10px;
    font-size: 14px;
    font-weight: 500;
    color: #64748B;
    text-align: start;
  }

  table tbody tr td {
    padding: 15px 0;
    border-bottom: 2px solid #e2e8f0;
  }
</style>