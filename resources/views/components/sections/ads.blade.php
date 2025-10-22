<section class="grid grid-cols-1 md:grid-cols-2 gap-4 my-10">
  <article class="bg-add1 bg-no-repeat bg-center bg-cover w-full h-69 flex flex-col justify-center gap-3 px-7 rounded-lg">
    <p class="text-white/40 uppercase font-semibold text-xs md:text-sm">Ofertas refrescantes de primavera</p>
    <h3 class=" text-white font-extrabold text-3xl md:text-4xl w-88">Piezas que trabajan tan duro como tu</h3>
    <p class=" text-white text-sm font-normal mb-3">Sin desajustes, solo piezas exactas</p>
    <x-buttons.comprar class="text-black bg-white"/>
  </article>

  <article class="bg-add2 bg-no-repeat bg-center bg-cover w-full h-69 flex flex-col justify-center gap-3 px-7 rounded-lg">
    <p class="text-black/40 uppercase font-semibold text-xs md:text-sm">Precision en cada parte</p>
    <h3 class="text-black font-extrabold text-3xl md:text-4xl w-95">Repuestos confiables para cada viaje</h3>
    <p class="text-black text-sm font-normal mb-3">Cada pieza esta diseñada a tu medida</p>
    <x-buttons.comprar class="text-black bg-white"/>
  </article>
</section>

<style>
  .bg-add1 {
    background-image: url('/images/add-parts.svg');
  }

  .bg-add2 {
    background-image: url('/images/add-trusted.svg');
  }
</style>