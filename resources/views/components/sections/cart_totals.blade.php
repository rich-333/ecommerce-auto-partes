<section id="cart-totals">
  <h2 class=" text-xl font-medium">Total del carrito</h2>

  <div class=" mt-4">
    <div class=" flex justify-between items-center border-b-2 border-carousel-border py-3">
      <p class=" text-sm font-semibold">Subtotal</p>
      <p  id="subtotal" class=" font-normal">{{ number_format($carrito->sum(fn($c) => $c->cantidad * ($c->producto->precio * ($c->producto->descuentos?->activo ? (1 - $c->producto->descuentos->valor / 100) : 1))), 2) }} Bs.</p>
    </div>

    <div class=" flex justify-between items-center border-b-2 border-carousel-border py-3">
      <p class=" text-sm font-semibold">Envio</p>
      <p id="envio" class=" font-normal">15 Bs.</p>
    </div>

    <div class=" flex justify-between items-center py-3">
      <p class=" text-sm font-semibold">Total</p>
      <p id="total" class=" font-bold">{{ number_format($carrito->sum(fn($c) => $c->cantidad * ($c->producto->precio * ($c->producto->descuentos?->activo ? (1 - $c->producto->descuentos->valor / 100) : 1))) + 15, 2) }} Bs.</p>
    </div>
  </div>

  <button class=" bg-discount text-white font-semibold w-full mt-2 rounded-lg py-3 cursor-pointer">
    Proceder al pago
  </button>
</section>