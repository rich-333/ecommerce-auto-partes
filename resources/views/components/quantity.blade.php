@props(['cantidad' => 1, 'idCarrito' => null, 'precio' => 0])

<div class="flex items-center border-2 border-carousel-border rounded-lg shadow-2xs w-28 h-12 group-hover:border-gray-500 overflow-hidden">
  <button
    class="flex-1 h-full text-lg font-bold text-slate-600 hover:text-white hover:bg-red-500 active:bg-red-600
          transition-all duration-200 cursor-pointer focus:outline-none 
          btn-decrement"
    data-id="{{ $idCarrito }}">
    -
  </button>
  <p class="flex-1 px-2 text-center font-bold cantidad-display" data-id="{{ $idCarrito }}">{{ $cantidad }}</p>
  <button
    class="flex-1 h-full text-lg font-bold text-slate-600 hover:text-white hover:bg-emerald-500 active:bg-emerald-600
          transition-all duration-200 cursor-pointer focus:outline-none
          btn-increment"
    data-id="{{ $idCarrito }}">
    +
  </button>
</div>