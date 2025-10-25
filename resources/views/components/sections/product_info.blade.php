<section>
  <p class=" font-normal">
    High-quality additives protect against leaks and won’t harm gaskets, hoses, plastics or
    original vehicle finish
  </p>
  <div class=" my-5">
    <x-price_new/>
    <x-price_base/>
  </div>

  <div class="flex gap-1.5">
    <x-quantity/>
    <button class=" text-white bg-discount rounded-lg w-full cursor-pointer font-semibold">Agregar al carrito</button>
  </div>

  <div class=" my-5">
    <button class="flex gap-2.5 items-center font-medium">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M12 21C11.7143 21 11.5238 20.9016 11.2381 20.7049C9.61905 19.918 8.19048 18.9344 6.85714 17.8525C4.47619 15.8852 2 12.8361 2 8.70492C2 5.55738 4.47619 3.09836 7.42857 3.09836C9.2381 3.09836 10.9524 4.08197 12 5.45902C13.0476 3.98361 14.6667 3 16.5714 3C19.619 3 22 5.55738 22 8.60656C22 12.7377 19.5238 15.8852 17.1429 17.7541C15.9048 18.8361 14.4762 19.7213 12.9524 20.5082H12.8571C12.2857 21 12.0952 21 12 21Z" stroke="black" stroke-width="1.6" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      <p>Agregar a favoritos</p>
    </button>
  </div>

  <x-sections.services_orders/>

  <div class=" flex gap-4 items-center my-6">
    <div class=" bg-green-600 p-2 rounded-full">
      <img src=" {{ asset('images/icons/telephone.svg') }} " alt="">
    </div>

    <p>Llame para asistencia inmediata al <a class=" hover:underline" href=""><strong>1-312-800-0888</strong></a></p>
  </div>

  <hr class=" border-black/20 mb-6">

  <div class=" flex flex-col gap-2">
    <p class=" text-gray-600 font-normal">Categoria: <span class="text-black font-semibold">Aceites y fluidos</span></p>
    <p class=" text-gray-600 font-normal">Marca: <span class="text-black font-semibold">Castrol</span></p>
  </div>

</section>