@extends('layouts.ecommerce')

@section('title', 'Carrito')

@section('content')
  <div class=" max-w-7xl mx-auto my-16">

    @if ($carrito->isNotEmpty())
      <div class=" grid grid-cols-1 lg:grid-cols-[950px_1fr] gap-8">
        <x-sections.product_table :carrito="$carrito"/>
        <x-sections.cart_totals :carrito="$carrito"/>
      </div>

      <div class=" mt-8">
        <x-buttons.limpiar_todo />
      </div>
    @else
      <div>
        <x-empty-page 
          icon="images/icons/cart.svg" 
          description="Tu carrito esta vacio actualmente."
        />

      </div>
    @endif

  </div>
@endsection

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const incrementBtns = document.querySelectorAll('.btn-increment');
    const decrementBtns = document.querySelectorAll('.btn-decrement');

    incrementBtns.forEach(btn => btn.addEventListener('click', changeQuantity));
    decrementBtns.forEach(btn => btn.addEventListener('click', changeQuantity));

    function changeQuantity(e) {
      const id = e.target.dataset.id;
      const display = document.querySelector(`.cantidad-display[data-id='${id}']`);
      let cantidad = parseInt(display.textContent);

      if (e.target.classList.contains('btn-increment')) {
        cantidad++;
      } else {
        if (cantidad > 1) cantidad--;
      }

      display.textContent = cantidad;

      const fila = display.closest('tr');
      const precio = parseFloat(fila.querySelector('td:nth-child(2)').dataset.precio);
      const subtotalCell = fila.querySelector('td:nth-child(4)');
      subtotalCell.textContent = (cantidad * precio).toFixed(2);

      updateCartTotals();

      function updateCartTotals() {
        let subtotal = 0;
        document.querySelectorAll('tbody tr').forEach(row => {
          const cantidad = parseInt(row.querySelector('.cantidad-display').textContent);
          const precio = parseFloat(row.querySelector('td:nth-child(2)').dataset.precio);
          subtotal += cantidad * precio;
        });

        document.getElementById('subtotal').textContent = subtotal.toFixed(2) + ' Bs.';
        
        const envio = 15;
        document.getElementById('envio').textContent = envio.toFixed(2) + ' Bs.';
        document.getElementById('total').textContent = (subtotal + envio).toFixed(2) + ' Bs.';
      }

      if (id) {
        const cantidadInput = document.querySelector('#cantidadInput');
        if (cantidadInput) {
          cantidadInput.value = cantidad;
        }
      }


      fetch(`/carrito/update/${id}`, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ cantidad })
      })
      .then(res => res.json())
      .then(data => console.log('Cantidad actualizada en BD:', data.cantidad));
    }
  });
</script>