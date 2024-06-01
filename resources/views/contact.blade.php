<x-app-layout>
   <x-slot name="header">

   </x-slot>


<section class="contact">

   <h1 class="title">Contáctanos</h1>

   <form action="{{ route('message.store') }}" method="POST">
      @csrf
    <input type="text" name="name" class="box" required placeholder="Ingrese su nombre">
    <input type="email" name="email" class="box" required placeholder="Ingrese su correo electrónico">
    <input type="text" name="number" class="box" required placeholder="Ingrese su número de teléfono">
    <textarea name="message" class="box" required placeholder="Escriba su mensaje" cols="30" rows="10"></textarea>
    <input type="submit" value="Enviar mensaje" class="btn" name="send">
</form>


</section>
<x-slot name="footer">

</x-slot>
</x-app-layout>