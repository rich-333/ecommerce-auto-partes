<section>
  <form action="">
    <div class=" flex flex-col gap-2 mb-6">
      <h2 class="text-base md:text-lg font-semibold text-gray-700 uppercase tracking-wide mb-3 border-b border-gray-300 pb-1">filtrar por categoria</h2>
      @foreach ($categorias as $categoria)
        <div class="flex items-center gap-1">
          <input class=" shadow-xs" type="checkbox" id="{{ $categoria->nombre }}" name="category[]" value="{{ $categoria->id_categoria }}">
          <label class=" font-medium text-sm md:text-base" for="{{ $categoria->nombre }}">{{ $categoria->nombre }}</label>
        </div>
      @endforeach
    </div>

    <div class="flex flex-col gap-2 mb-6">
      <h2 class="text-base md:text-lg font-semibold text-gray-700 uppercase tracking-wide mb-3 border-b border-gray-300 pb-1">Filtrar por precio</h2>
      <div>
        <input class="range-minimal" type="range" name="price" min="0" max="5000" value="5000" id="priceRange">
        <div class="flex justify-between items-center">
          <span>0 Bs.</span>
          <span id="priceValue">5000 Bs.</span>
        </div>
      </div>
    </div>

    <div class="flex flex-col gap-2">
      <h2 class="text-base md:text-lg font-semibold text-gray-700 uppercase tracking-wide mb-3 border-b border-gray-300 pb-1">Marcas</h2>

      @foreach ($marcas as $marca)
        <div class=" flex items-center gap-1">
          <input class=" shadow-xs" type="radio" id="{{ $marca->nombre }}" name="brand" value="{{ $marca->id_marca }}">
          <label class=" font-medium text-sm md:text-base" for="{{ $marca->nombre }}">{{ $marca->nombre }} </label>
        </div>
      @endforeach
    </div>
  </form>
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

<script>
  const priceInput = document.getElementById('priceRange');
  const priceValue = document.getElementById('priceValue');
  priceInput.addEventListener('input', () => {
    priceValue.textContent = priceInput.value;
  });
</script>