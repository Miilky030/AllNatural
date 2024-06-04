<x-app-layout>
   <x-slot name="header">

   </x-slot>
   <div class="home-bg">

      <section class="home">

         <div class="content">
            <span>Pureza y Frescura en Cada Producto</span>
            <h3>Nueva línea Infantil</h3>
            <p>Nuestra nueva línea infantil está diseñada para brindar una limpieza suave y nutritiva, dejando el cabello de tus pequeños fresco, suave y radiante.</p>
            <a href="{{ route('category.index',['name'=>'vegitables']) }}" class="btn">nuestros productos</a>
         </div>

      </section>

   </div><br>

   

   <section class="p-category">

      <a href="{{ route('category.index',['name'=>'Líneas Capilares']) }}">Líneas Capilares</a>
      <a href="{{ route('category.index',['name'=>'Línea Infantil']) }}">Línea Infantil</a>
      <a href="{{ route('category.index',['name'=>'Línea Masculina']) }}">Línea Masculina</a>
      <a href="{{ route('category.index',['name'=>'Catálogo']) }}">Catalogo</a>
   </section>

  

   <div class="title-cards">
		<h2>Conoce más acerca de Nosotros y nuestros Servicios </h2>
	</div>
<div class="servicios">
	
<div class="homecard">
	<figure>
		<img src="images/bigcard1.jpg">
	</figure>
	<div class="contenido-card">
		<h3>Productos aptos para todas las edades y tipos de cabello</h3>
		<p>En All Natural, nos apasiona crear productos capilares de alta calidad que sean aptos para todas las edades y tipos de cabello. Desde los más pequeños de la casa hasta los adultos con las necesidades más exigentes, ¡tenemos algo para todos!.</p>
		<a href="{{ route('blog.index') }}">Leer Màs</a>
	</div>
</div>
<div class="homecard">
	<figure>
		<img src="images/shi.jpg">
	</figure>
	<div class="contenido-card">
		<h3>Productos Eco-Friendly</h3>
		<p>¿Buscas productos que sean amables con el medio ambiente sin sacrificar calidad o rendimiento? ¡Entonces has llegado al lugar correcto! En All Natural, nos apasiona crear productos eco-friendly que te ayuden a reducir tu impacto ambiental y a vivir un estilo de vida más sostenible. Conoce más sobre nosotros </p>
		<a href="{{ route('about.index') }}">Leer Màs</a>
	</div>
</div>
<div class="homecard">
	<figure>
		<img src="images/asesoria.jpg">
	</figure>
	<div class="contenido-card">
		<h3>Asesoría Capilar en All Natural</h3>
		<p>En nuestro blog, encontrarás información útil sobre el cuidado del cabello, consejos para elegir los productos adecuados para tu tipo de cabello y porque es tan importante la asesoría capilar. Recalcando la importancia de productos amigables con el medio ambiente, libre de sulfatos y parabenos</p>
		<a href="{{ route('blog.index') }}">Leer Màs</a>
	</div>
</div>
</div>



  <br><div class="custom-bg">

   <section class="custom-home">

       <div class="custom-content">
           <h3>Los favoritos del momento</h3>
           <p>El pre-poo prepara tu cabello antes del lavado, protegiendo e hidratando profundamente cada hebra. La jalea reparadora es perfecta para restaurar el cabello dañado, ofreciendo una mezcla única de ingredientes que nutren y fortalecen desde la raíz hasta las puntas. Finalmente, el gotero anticaída y crecimiento estimula el cuero cabelludo, promoviendo un crecimiento saludable y previniendo la caída del cabello, todo gracias a su fórmula avanzada y natural. </p>
        
       </div>

   </section>

</div><br>



<br><div class="masculine-bg">

   <section class="masculine-home">

       <div class="masculine-content">
           <h3>Nueva línea Masculina</h3>
           <p>Nuestra nueva línea masculina está diseñada para ofrecer una limpieza profunda y revitalizante, dejando el cabello fresco, fuerte y lleno de vitalidad. Estos productos están formulados con ingredientes naturales que hidratan y nutren el cuero cabelludo, combatiendo la sequedad y la caspa.</p>

       </div>

   </section>

</div><br>


{{-- 
   <section class="products">

      <h1 class="title">Ultimos productos</h1>

      <div class="box-container">
         @if ($products->isNotEmpty())
             @foreach ($products as $product)
               <form action="{{ route('cart.store') }}" class="box" method="POST">

                  @csrf 
                  <div class="price">$<span><?= $product['price']; ?></span>/-</div>
                  <a href="{{ route('view.page.index',$product) }}" class="fas fa-eye"></a>
                  <img src="{{ asset('/storage/'.$product['image']) }}" alt="">
                  <div class="name"><?= $product['name']; ?></div>
                  <input type="hidden" name="pid" value="<?= $product['id']; ?>">
                  <input type="hidden" name="name" value="<?= $product['name']; ?>">
                  <input type="hidden" name="price" value="<?= $product['price']; ?>">
                  <input type="hidden" name="image" value="<?= $product['image']; ?>">
                  <input type="number" min="1" value="1" name="quantity" class="qty">

                  <input type="submit" value="Agregar a lista de deseos" class="option-btn" name="add_to_wishlist">
                  
                  <input type="submit" value="Agregar al carrito" class="btn" name="add_to_cart">
               </form>
             @endforeach
         @else
         <p class="empty">Aún no se han añadido productos!</p>
         @endif
         

      </div>

   </section>
   --}}

   <x-slot name="footer">

   </x-slot>
</x-app-layout>
