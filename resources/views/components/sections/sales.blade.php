<section class="flex my-10">
  
  <div class="grid grid-cols-2 grid-rows-2 gap-x-4 gap-y-10">
    <x-product />
    <x-product />
    <x-product />
    <x-product />
  </div>


    <div class=" bg-sales bg-cover bg-center bg-no-repeat w-[299px] h-[936px] mx-3 text-center text-black pt-10">
      <p class=" text-black/50 text-xs font-semibold mb-2">PIEZAS DE ALTA CALIDAD</p>
      <h3 class=" font-extrabold text-2xl px-7">Obtenga mas millas por menos</h3>
      <p class=" text-sm font-normal my-3">Buscar por marca.</p>
      <x-buttons.comprar class="text-white bg-discount mx-auto"/>
    </div>


  <div class="grid grid-cols-2 grid-rows-2 gap-x-4 gap-y-10">
    <x-product />
    <x-product />
    <x-product />
    <x-product />
  </div>

</section>

<style>
  .bg-sales {
    background-image: url('/images/sales.svg');
  }
</style>