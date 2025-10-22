<section class=" grid grid-cols-1 md:grid-cols-2 gap-4 my-10">
  <div class="bg-contact bg-center bg-no-repeat bg-cover w-full h-148 rounded-lg">

  </div>

  <form action="" class=" bg-form-contact rounded-lg border-2 border-carousel-border flex flex-col gap-4 p-6">
    <h3 class=" font-medium text-2xl md:text-3xl">Escribenos...</h3>
    <p class=" font-normal text-secondary mb-3">
      Cuéntanos tu consulta y un asesor te contactará en 1–2 días hábiles. Respetamos tu privacidad.
    </p>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
      <div class=" flex flex-col gap-2.5">
        <label for="nombre" class=" text-black font-medium text-sm">Tu nombre *</label>
        <input class=" bg-white border-2 border-form-border shadow-xs rounded-lg py-2.5 px-2" type="text" id="nombre">
      </div>

      <div class=" flex flex-col gap-2.5">
        <label for="email" class=" text-black font-medium text-sm">Tu email *</label>
        <input class=" bg-white border-2 border-form-border shadow-xs rounded-lg py-2.5 px-2" type="email" id="email">
      </div>
    </div>

    <div class=" flex flex-col gap-2.5">
      <label for="tema" class=" text-black font-medium text-sm">Tema *</label>
      <input type="text" id="tema" class=" bg-white border-2 border-form-border shadow-xs rounded-lg py-2.5 px-2">
    </div>  

    <div class=" flex flex-col gap-2.5">
      <label for="mensaje" class=" text-black font-medium text-sm">Tu mensaje</label>
      <textarea  class=" bg-white border-2 border-form-border shadow-xs rounded-lg py-2.5 px-2" name="" id="mensaje" cols="5" rows="4"></textarea>
    </div>

    <button class=" bg-discount w-36 h-11 rounded-lg text-white font-semibold mt-3" type="submit">Enviar mensaje</button>
  </form> 
</section>

<style>
  .bg-contact {
    background-image: url('/images/contact.svg');
  }
</style>