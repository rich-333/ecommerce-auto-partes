@extends('layouts.ecommerce')

@section('title', 'Iniciar Sesion')

@section ('content')
  <section class="flex items-center justify-center min-h-screen bg-gray-50">

    <div class="w-full max-w-sm bg-white p-6 rounded-md shadow-sm">
      <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">Iniciar sesión</h1>

      <div class="space-y-3 mb-6 border-b-2 border-carousel-border pb-4">
        <button class="w-full flex items-center justify-center border border-gray-300 rounded-md py-2 text-gray-700 hover:bg-gray-100 font-bold">
          <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" class="w-5 h-5 mr-2">
          Continuar con Google
        </button>
        <button class="w-full flex items-center justify-center border border-gray-300 rounded-md py-2 text-gray-700 hover:bg-gray-100 font-bold">
          <img src="https://www.svgrepo.com/show/448224/facebook.svg" alt="Facebook" class="w-5 h-5 mr-2">
          Continuar con Facebook
        </button>
      </div>

      <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <div>
          <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
          <input type="email" id="email" name="email" placeholder="Ingrese su dirección de correo electrónico" required
                class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none placeholder:text-txt-footer">
        </div>

        <div>
          <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Contraseña</label>
          <div class="relative">
            <input type="password" id="password" name="password" placeholder="Ingrese su contraseña" required
                  class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none placeholder:text-txt-footer">
          </div>
        </div>

        <button type="submit" class="w-full bg-discount cursor-pointer text-white py-2 rounded-md hover:bg-blue-700 font-bold">
          Iniciar sesión
        </button>

        <div class="text-right">
          <a href="#" class="text-sm text-blue-600 hover:underline">Olvidaste tu contraseña?</a>
        </div>
      </form>

      <p class="text-xs text-gray-500 mt-6">
        Al continuar con Google o correo electrónico, aceptas los términos de Todoist
        <a href="#" class="text-blue-600 hover:underline">Términos de Servicio</a> y
        <a href="#" class="text-blue-600 hover:underline">Política de Privacidad</a>.
      </p>

      <div class="border-t border-gray-200 my-6"></div>

      <p class="text-center text-sm text-gray-600">
        ¿No tienes una cuenta?
        <a href="{{ route('register.form') }}" class="text-blue-600 hover:underline">Regístrate</a>
      </p>
    </div>

  </section>
@endsection