@props(['favorito'])

<section>
  <table class=" w-full">
    <thead class=" border-b-2 border-carousel-border">
      <tr>
        <th>Producto</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Marca</th>
        <th></th>
      </tr>
    </thead>

    <tbody>
      
      @foreach ($favorito as $fav)
        <tr class="hover:bg-slate-200 transition-colors duration-150 cursor-pointer">
          <td class=" flex items-center gap-x-5">
            @foreach ($fav->producto->imagenes as $img)
              @if ($img->es_principal)
                <img class="w-20 h-20 border-2 border-carousel-border rounded-lg transition-transform duration-300 hover:scale-105" src=" {{ $img->url_imagen }} " alt="">
              @endif
            @endforeach
            <p class=" font-medium">{{ $fav->producto->nombre }}</p>
          </td>
          <td class=" font-normal">
            {{ $fav->producto->precio }}
          </td>
          <td>
            {{ $fav->producto->stock }}
          </td>
          <td >
            {{ $fav->producto->marca->nombre }}
          </td>
          <td>
            <form action="{{ route('favorito.delete', $fav->id_favorito) }}" method="POST">
              @csrf
              @method('DELETE')
              <button 
                type="submit"   
                class="bg-white rounded-sm border-2 border-carousel-border p-1 shadow-2xs 
                cursor-pointer transition-all duration-200 hover:bg-red-400 
                active:scale-95 focus:ring-2 focus:ring-red-700 group-hover:border-gray-500"
              >
                <img src="{{ asset('images/icons/remove.svg') }}" alt="">
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