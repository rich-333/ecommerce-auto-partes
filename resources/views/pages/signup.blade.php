@extends('layouts.ecommerce')

@section('title', 'Registrarse')

@section ('content')
  <section class="flex items-center justify-center min-h-screen bg-gray-50 my-10">

    <div class="w-full max-w-sm bg-white p-6 rounded-md shadow-sm">
      <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">Registrarse</h1>

      <div class="space-y-3 mb-6 border-b-2 border-carousel-border pb-4">
        <button class="w-full flex items-center justify-center border border-gray-300 rounded-md py-2 text-gray-700 hover:bg-gray-100 font-bold">
          <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" class="w-5 h-5 mr-2">
          Continue with Google
        </button>
        <button class="w-full flex items-center justify-center border border-gray-300 rounded-md py-2 text-gray-700 hover:bg-gray-100 font-bold">
          <img src="https://www.svgrepo.com/show/448224/facebook.svg" alt="Facebook" class="w-5 h-5 mr-2">
          Continue with Facebook
        </button>
      </div>

      <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf

        <div>
          <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
          <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre" required
                class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none placeholder:text-txt-footer">
        </div>

        <div>
          <label for="apellidos" class="block text-sm font-medium text-gray-700 mb-1">Apellidos</label>
          <input type="text" id="apellidos" name="apellidos" placeholder="Ingresa tus apellidos" required
                class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none placeholder:text-txt-footer">
        </div>

        <div>
          <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
          <input type="email" id="email" name="email" placeholder="Ingrese su dirección de correo electrónico" required
                class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none placeholder:text-txt-footer">
        </div>

        <div>
          <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Contraseña</label>
          <input type="password" id="password" name="password" placeholder="Ingrese su contraseña" required
                class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none placeholder:text-txt-footer">
        </div>

        <button type="submit" class="w-full bg-discount cursor-pointer text-white py-2 rounded-md hover:bg-blue-700 font-bold">
          Registrarse
        </button>
      </form>

      <p class="text-xs text-gray-500 mt-6">
        Al continuar con Google o correo electrónico, aceptas los términos de Todoist
        <a href="#" class="text-blue-600 hover:underline">Términos de Servicio</a> y
        <a href="#" class="text-blue-600 hover:underline">Política de Privacidad</a>.
      </p>

      <div class="border-t border-gray-200 my-6"></div>

      <p class="text-center text-sm text-gray-600">
        Ya tienes una cuenta?
        <a href="{{ route('login.form') }}" class="text-blue-600 hover:underline">Iniciar Sesion</a>
      </p>
    </div>

  </section>
@endsection
