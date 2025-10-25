<article class=" w-60 h-112">
  <div class=" relative h-60">
    <img class="w-full rounded-lg border-carousel-border border-2" src=" {{ asset('images/ejem.svg') }} " alt="">
    <x-discount />

    <button class=" cursor-pointer">
      <svg class="absolute top-3 right-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 21C11.7143 21 11.5238 20.9016 11.2381 20.7049C9.61905 19.918 8.19048 18.9344 6.85714 17.8525C4.47619 15.8852 2 12.8361 2 8.70492C2 5.55738 4.47619 3.09836 7.42857 3.09836C9.2381 3.09836 10.9524 4.08197 12 5.45902C13.0476 3.98361 14.6667 3 16.5714 3C19.619 3 22 5.55738 22 8.60656C22 12.7377 19.5238 15.8852 17.1429 17.7541C15.9048 18.8361 14.4762 19.7213 12.9524 20.5082H12.8571C12.2857 21 12.0952 21 12 21Z" stroke="black" stroke-width="1.6" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </button>
  </div>

  <div class="py-5">
    <header class="flex flex-col gap-3 mb-3">
      <div>
        <img src=" {{ asset('images/icons/star.svg') }} " alt="">
      </div>
      <h3 class=" font-medium text-sm">Zerex G05 Phosphate Free Antifreeze Coolant</h3>
      <div class="flex justify-between items-center">
        <div class="flex gap-1 items-end">
          <x-price_new/>
          <x-price_base/>
        </div>
        <button class=" bg-discount rounded-lg p-2 cursor-pointer">
          <img src=" {{ asset('images/icons/cart.svg') }} " alt="">
        </button>
      </div>
      <div class=" border-1 border-carousel-border w-full"></div>
    </header>

    <footer class="flex flex-col gap-2">
      <div class=" border-2 border-red-500"></div>
      <div class="flex justify-between text-xs font-normal">
        <p>Disponible: <span class=" font-semibold">14</span></p>
        <p>Vendido: <span class=" font-semibold">29</span></p>
      </div>
    </footer>
  </div>

</article>