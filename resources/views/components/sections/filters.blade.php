<section class="">
  <div class=" flex flex-col gap-2 mb-6">
    <h2 class=" font-bold mb-2">filtrar por categoria</h2>
    <div>
      <input class=" shadow-xs" type="checkbox" name="category">
      <label class=" font-medium text-sm md:text-base" for="">Frenos</label>
    </div>
    <div>
      <input class=" shadow-xs" type="checkbox" name="category">
      <label class=" font-medium text-sm md:text-base" for="">Empaques</label>
    </div>
    <div>
      <input class=" shadow-xs" type="checkbox" name="category">
      <label class=" font-medium text-sm md:text-base" for="">Filtros</label>
    </div>
    <div>
      <input class=" shadow-xs" type="checkbox" name="category">
      <label class=" font-medium text-sm md:text-base" for="">Radiadores</label>
    </div>
    <div>
      <input class=" shadow-xs" type="checkbox" name="category">
      <label class=" font-medium text-sm md:text-base" for="">Pistones</label>
    </div>
  </div>

  <div class="flex flex-col gap-2 mb-6">
    <h2 class="font-bold mb-2">Filtrar por precio</h2>
    <div>
      <input class="range-minimal" type="range" name="price" id="">
      <span>0</span>
      <span class="">5000</span>
    </div>
  </div>

  <div class="flex flex-col gap-2">
    <h2 class="font-bold mb-2">Marcas</h2>
    <div class=" flex items-center gap-1">
      <input class=" shadow-xs" type="radio" name="brand">
      <label class=" font-medium text-sm md:text-base" for="">Marca 1</label>
    </div>
    <div class=" flex items-center gap-1">
      <input class=" shadow-xs" type="radio" name="brand">
      <label class=" font-medium text-sm md:text-base" for="">Marca 1</label>
    </div>
    <div class=" flex items-center gap-1">
      <input class=" shadow-xs" type="radio" name="brand">
      <label class=" font-medium text-sm md:text-base" for="">Marca 1</label>
    </div>
  </div>
</section>

<style>
  .range-minimal {
    -webkit-appearance: none;
    width: 100%;
    height: 2px;
    background: transparent;
  }

  .range-minimal::-webkit-slider-runnable-track {
    height: 6px;
    background: var(--color-discount);
  }

  .range-minimal::-moz-range-track {
    height: 2px;
    background: white;
    border: 1px solid var(--color-discount);
  }

  .range-minimal::-webkit-slider-thumb {
    -webkit-appearance: none;
    width: 16px;
    height: 16px;
    background: white;
    border: 4px solid var(--color-discount);
    border-radius: 50%;
    cursor: pointer;
  }

  .range-minimal::-moz-range-thumb {
    width: 16px;
    height: 16px;
    background: #333;
    border-radius: 50%;
    cursor: pointer;
    border: none;
  }
</style>