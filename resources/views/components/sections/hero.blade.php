<section class="mt-6">
  <div class=" bg-hero bg-cover bg-center bg-no-repeat h-[620px]">
    <div class=" w-full h-full flex flex-col justify-center items-center px-5">
      <p class=" text-sm lg:text-lg text-white/70 font-normal">Encuentra las mejores ofertas</p>
      <h2 class=" text-center w-2xl text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 leading-18">Encuentra las mejores piezas para tu vehículo</h2>
      <p class=" font-normal opacity-75 lg:text-xl text-white mb-6">Calidad y confianza en cada compra</p>
      <a href="#" class=" bg-white text-black px-6 py-3 rounded-full text-sm md:text-lg font-semibold hover:bg-white/85 transition duration-100">Explorar Productos</a>
    </div>
  </div>  

  <div class="relative overflow-hidden border-y-2 border-carousel-border my-4 carousel-fade">
    <div class="flex animate-marquee space-x-16 py-6">
      <img src="{{ asset('images/brand/audi.svg') }}" alt="Audi" class="h-16 object-contain" />
      <img src="{{ asset('images/brand/bmw.svg') }}" alt="BMW" class="h-16 object-contain" />
      <img src="{{ asset('images/brand/chevrolet.svg') }}" alt="Chevrolet" class="h-16 object-contain" />
      <img src="{{ asset('images/brand/ford.svg') }}" alt="Ford" class="h-16 object-contain" />
      <img src="{{ asset('images/brand/honda.svg') }}" alt="Honda" class="h-16 object-contain" />
      <img src="{{ asset('images/brand/hyundai.svg') }}" alt="Hyundai" class="h-16 object-contain" />
      <img src="{{ asset('images/brand/jeep.svg') }}" alt="Jeep" class="h-16 object-contain" />
      <img src="{{ asset('images/brand/mazda.svg') }}" alt="Mazda" class="h-16 object-contain" />
      <img src="{{ asset('images/brand/nissan.svg') }}" alt="Nissan" class="h-16 object-contain" />
      <img src="{{ asset('images/brand/toyota.svg') }}" alt="Toyota" class="h-16 object-contain" />
      <img src="{{ asset('images/brand/mercedes.svg') }}" alt="Mercedes" class="h-16 object-contain" />
      <img src="{{ asset('images/brand/mitsubishi.svg') }}" alt="Mitsubishi" class="h-16 object-contain" />
      <img src="{{ asset('images/brand/peugeot.svg') }}" alt="Peugeot" class="h-16 object-contain" />
      <img src="{{ asset('images/brand/range-rover.svg') }}" alt="Range Rover" class="h-16 object-contain" />
      <img src="{{ asset('images/brand/renault.svg') }}" alt="Renault" class="h-16 object-contain" />
      <img src="{{ asset('images/brand/volkswagen.svg') }}" alt="Volkswagen" class="h-16 object-contain" />

      <img src="{{ asset('images/brand/audi.svg') }}" alt="Audi" class="h-16 object-contain" />
      <img src="{{ asset('images/brand/bmw.svg') }}" alt="BMW" class="h-16 object-contain" />
      <img src="{{ asset('images/brand/chevrolet.svg') }}" alt="Chevrolet" class="h-16 object-contain" />
      <img src="{{ asset('images/brand/ford.svg') }}" alt="Ford" class="h-16 object-contain" />
      <img src="{{ asset('images/brand/honda.svg') }}" alt="Honda" class="h-16 object-contain" />
      <img src="{{ asset('images/brand/hyundai.svg') }}" alt="Hyundai" class="h-16 object-contain" />
      <img src="{{ asset('images/brand/jeep.svg') }}" alt="Jeep" class="h-16 object-contain" />
      <img src="{{ asset('images/brand/mazda.svg') }}" alt="Mazda" class="h-16 object-contain" />
      <img src="{{ asset('images/brand/nissan.svg') }}" alt="Nissan" class="h-16 object-contain" />
      <img src="{{ asset('images/brand/toyota.svg') }}" alt="Toyota" class="h-16 object-contain" />
      <img src="{{ asset('images/brand/mercedes.svg') }}" alt="Mercedes" class="h-16 object-contain" />
      <img src="{{ asset('images/brand/mitsubishi.svg') }}" alt="Mitsubishi" class="h-16 object-contain" />
      <img src="{{ asset('images/brand/peugeot.svg') }}" alt="Peugeot" class="h-16 object-contain" />
      <img src="{{ asset('images/brand/range-rover.svg') }}" alt="Range Rover" class="h-16 object-contain" />
      <img src="{{ asset('images/brand/renault.svg') }}" alt="Renault" class="h-16 object-contain" />
      <img src="{{ asset('images/brand/volkswagen.svg') }}" alt="Volkswagen" class="h-16 object-contain" />
    </div>
  </div>

  <div class="flex justify-between items-center mb-4">
    <div class="flex gap-6 ">
      <img src=" {{ asset('images/icons/original.svg') }} " alt="">
      <div class="flex flex-col justify-center gap-1">
        <h3 class=" font-semibold">Productos Originales</h3>
        <p class=" text-xs md:text-sm font-normal">Repuestos certificados por el fabricante con garantía.</p>
      </div>
    </div>
    <div class="border-r-2 border-carousel-border h-10"></div>
    <div class="flex gap-6">
      <img src=" {{ asset('images/icons/affordable.svg') }} " alt="">
      <div class="flex flex-col justify-center gap-1">
        <h3 class=" font-semibold">Tarifas Asequibles</h3>
        <p class="text-xs md:text-sm font-normal">Precios competitivos y promociones frecuentes.</p>
      </div>
    </div>
    <div class="border-r-2 border-carousel-border h-10"></div>
    <div class="flex gap-6">
      <img src=" {{ asset('images/icons/wide.svg') }} " alt="">
      <div class="flex flex-col justify-center gap-1">
        <h3 class=" font-semibold">Amplia Variedad</h3>
        <p class="text-xs md:text-sm font-normal">Amplio catálogo para múltiples marcas y modelos.</p>
      </div>
    </div>
  </div>
</section>

<style>
  .bg-hero {
    background-image: url('/images/hero.svg');
  }

  @keyframes marquee {
    0% {
      transform: translateX(0%);
    }
    100% {
      transform: translateX(-50%);
    }
  }

  .animate-marquee {
    display: flex;
    width: 200%;
    animation: marquee 30s linear infinite;
  }

  .animate-marquee:hover {
    animation-play-state: paused;
  }

  .carousel-fade::before,
  .carousel-fade::after {
    content: "";
    position: absolute;
    top: 0;
    width: 50px;
    height: 100%;
    z-index: 10;
    pointer-events: none;
  }

  .carousel-fade::before {
    left: 0;
    background: linear-gradient(to right, #f5f8fb, transparent);
  }

  .carousel-fade::after {
    right: 0;
    background: linear-gradient(to left, #f5f8fb, transparent);
  }
</style>