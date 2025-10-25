<section>
  <table class=" w-full">
    <thead class=" border-b-2 border-carousel-border">
      <tr>
        <th>Producto</th>
        <th>Precio</th>
        <th>Estado</th>
        <th>Marca</th>
        <th></th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td class=" flex items-center gap-x-5">
          <img class=" border-2 border-carousel-border rounded-lg" src=" {{ asset('images/cart_example.svg') }} " alt="">
          <p class=" font-medium">Zerex G05 Phosphate Free Antifreeze Coolant Concentrate 1 GA</p>
        </td>
        <td class=" font-normal">
          33.43 Bs
        </td>
        <td>
          En stock
        </td>
        <td >
          Motul
        </td>
        <td>
          <button class=" bg-white rounded-sm border-2 border-carousel-border p-1 shadow-2xs">
            <img src="{{ asset('images/icons/remove.svg') }}" alt="">
          </button>
        </td>
      </tr>
      <tr>
        <td class=" flex items-center gap-x-5">
          <img class=" border-2 border-carousel-border rounded-lg" src=" {{ asset('images/cart_example.svg') }} " alt="">
          <p class=" font-medium">Zerex G05 Phosphate Free Antifreeze Coolant Concentrate 1 GA</p>
        </td>
        <td class=" font-normal">
          33.43 Bs
        </td>
        <td>
          En stock
        </td>
        <td>
          Motul
        </td>
        <td>
          <button class=" bg-white rounded-sm border-2 border-carousel-border p-1 shadow-2xs">
            <img src="{{ asset('images/icons/remove.svg') }}" alt="">
          </button>
        </td>
      </tr>
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