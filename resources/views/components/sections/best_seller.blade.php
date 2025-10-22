<section class="mb-10">
  <header class="flex justify-between items-center">
    <h4 class=" font-semibold text-lg md:text-2xl">Mas Vendidos</h4>
    <a href="#" class=" text-sm md:text-base font-semibold text-discount">Ver Todo</a>
  </header>

  <div class="border-b-2 border-carousel-border my-5"></div>

  <div class=" flex gap-5">
    <x-product />
    <x-product />
    <x-product />
    <x-product />
    <x-product />
  </div>

  <div class=" flex justify-center items-center gap-3 mt-5">
    <button class=" w-3 h-3 rounded-full bg-discount/35 cursor-pointer active:scale-75 is-active"></button>
    <button class=" w-3 h-3 rounded-full bg-discount/35 cursor-pointer hover:bg-discount active:scale-75"></button>
    <button class=" w-3 h-3 rounded-full bg-discount/35 cursor-pointer hover:bg-discount active:scale-75"></button>
    <button class=" w-3 h-3 rounded-full bg-discount/35 cursor-pointer hover:bg-discount active:scale-75"></button>
  </div>
</section>

<style>
  .is-active{
    background-color: var(--color-discount);
  }
</style>