@vite('resources/css/app.css')
<header class=" bg-heading text-white flex px-15 max-h-20">
  <div class=" max-w-8xl flex justify-between items-center w-full ">
    <a href="home" aria-label="Ir al inicio" >
      <img src="{{ asset('images/LogoTurboParts.png') }}" alt="Turbo Parts" class="w-20">
    </a>
    <nav aria-label="Menú principal">
      <ul class="flex gap-4 font-semibold">
        <li>
          <a href="Home">Inicio</a>
        </li>
        <li>
          <a href="Productos">Productos</a>
        </li>
        <li>
          <a href="Contacto">Contacto</a>
        </li>
      </ul>
    </nav>
    <div class="flex gap-2 items-center">
      <div class="flex gap-1.5 items-center">
        <a href="" aria-label="Ir a iniciar sesión" class="bg-icons rounded-full w-10 h-10 flex justify-center items-center border-border-icons border-1">
          <img class=" w-6 h-6" src=" {{ asset('images/icons/profile.svg') }} " alt="" aria-hidden="true">
        </a>
        <div>
          <p class=" text-xs font-normal opacity-75">Iniciar Sesion</p>
          <span class="text-xs font-semibold">Cuenta</span>
        </div>
      </div>
      <a href="" aria-label="Ver favoritos" class="bg-icons rounded-full w-10 h-10 flex justify-center items-center border-border-icons border-1">
        <img class=" w-6" src=" {{ asset('images/icons/favorite.svg') }} " alt="" aria-hidden="true"> 
      </a>
      <a href="" aria-label="Ver carrito de compras" class="bg-icons rounded-full w-10 h-10 flex justify-center items-center border-border-icons border-1">
        <img class=" w-6" src=" {{ asset('images/icons/cart.svg') }} " alt="" aria-hidden="true">
      </a>
    </div>
  </div>
</header>