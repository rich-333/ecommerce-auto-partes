@vite('resources/css/app.css')
<header class=" bg-heading text-white flex px-5 max-h-20">
  <div class=" max-w-8xl flex justify-between items-center w-full ">
    <img src="{{ asset('images/LogoTurboParts.png') }}" alt="Tutbo Parts Logo" class="w-20">
    <nav>
      <ul class="flex gap-4">
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
    <div class="flex gap-4">
      <div class="flex gap-1.5 items-center">
        <div class="bg-icons rounded-full w-10 h-10 flex justify-center items-center border-border-icons border-1">
          <a href="">
            <img class=" w-6 h-6" src=" {{ asset('images/icons/profile.svg') }} " alt="">
          </a>
        </div>
        <div>
          <p class=" text-xs font-normal opacity-75">Iniciar Sesion</p>
          <p class="text-xs font-semibold">Cuenta</p>
        </div>
      </div>
      <div class="bg-icons rounded-full w-10 h-10 flex justify-center items-center border-border-icons border-1">
        <a href="">
          <img class=" w-6" src=" {{ asset('images/icons/favorite.svg') }} " alt=""> 
        </a>
      </div>
      <div class="bg-icons rounded-full w-10 h-10 flex justify-center items-center border-border-icons border-1">
        <a href="">
          <img class=" w-6" src=" {{ asset('images/icons/cart.svg') }} " alt="">
        </a>
      </div>
    </div>
  </div>
</header>