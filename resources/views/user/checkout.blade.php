<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <section class="display-orders">
        @php
            $name_products = '';
            $cart_grand_total = 0;
        @endphp
        @if ($carts->isNotEmpty())
            @foreach ($carts as $cart)
                @php
                     $name_products.=$cart['name'].' ( '.$cart['quantity'].' ),';
                    $cart_total_price = ($cart['price'] * $cart['quantity']);
                    $cart_grand_total += $cart_total_price;
                @endphp
                <p> <?= $cart['name']; ?> <span>(<?= '$'.$cart['price'].'/- x '. $cart['quantity']; ?>)</span> </p>
            @endforeach
        @else
            <p class="empty">Carrito vacio!</p>
        @endif
        
        <div class="grand-total">cantidad total : <span>$<?= $cart_grand_total; ?>/-</span></div>
     </section>
     
     <section class="checkout-orders">
     
        <form action="{{ route('order.store') }}" method="POST">
            @csrf
           <h3>Dirección de envio</h3>
     
           <div class="flex">
              <div class="inputBox">
                 <span>Nombre :</span>
                 <input type="text" name="name" placeholder="nombre*" class="box" required>
              </div>
              <div class="inputBox">
                 <span>Teléfono :</span>
                 <input type="text" name="number" placeholder="número de teléfono*" class="box" required>
              </div>
              <div class="inputBox">
                 <span>Email :</span>
                 <input type="email" name="email" placeholder="correo electrónico*" class="box" required>
              </div>
              <div class="inputBox">
                 <span>Método de pago :</span>
                 <select name="method" class="box" required>
                    <option value="cash on delivery">Efectivo</option>
                    <option value="credit card">Tarjeta</option>
                    {{-- <option value="paytm">paytm</option>
                    <option value="paypal">paypal</option> --}}
                 </select>
                 <p class="mt-1 text-xl text-gray-600">
            {{ __('El pago se realiza exclusivamente en la entrega') }}
        </p>
              </div>
              <div class="inputBox">
                 <span>Direccion linea 01 :</span>
                 <input type="text" name="flat" placeholder="n. casa*" class="box" required>
              </div>
              <div class="inputBox">
                 <span>Direccion linea 02 :</span>
                 <input type="text" name="street" placeholder="calle*" class="box" required>
              </div>
              <div class="inputBox">
                 <span>Sector :</span>
                 <input type="text" name="secta" placeholder="sector*" class="box" required>
              </div>
              <div class="inputBox">
                 <span>Ciudad :</span>
                 <input type="text" name="city" placeholder="ciudad*" class="box" required>
              </div>
              <input type="hidden" name="total_products" value="{{ substr($name_products,0,-1) }}">

              <input type="hidden" name="total_price" value="{{ $cart_grand_total }}">

           </div>
     
           <br><input type="submit" name="order" class="btn <?= ($cart_grand_total > 1)?'':'disabled'; ?>" value="Realizar pedido">
     
        </form>
        
     </section>
     
    <x-slot name="footer">

    </x-slot>
</x-app-layout>