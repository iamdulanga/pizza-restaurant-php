@extends('layouts.app')

@section('title', 'Pizza - Shopping Cart')

@section('content')
    <section class="home-slider owl-carousel img" style="background-image: url('{{ asset('assets/images/bg_1.jpg') }}');">
      <div class="slider-item" style="background-image: url('{{ asset('assets/images/bg_3.jpg') }}');">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">
            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Your Cart</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span>Cart</span></p>
            </div>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
            @if(empty($cart))
              <div class="text-center py-5">
                <span class="flaticon-pizza-1" style="font-size: 64px; color: #fac564;"></span>
                <h3 class="mt-4 mb-3">Your cart is currently empty</h3>
                <p class="text-muted mb-4">You haven't added any of our delicious pizzas or meals yet.</p>
                <a href="{{ route('menu') }}" class="btn btn-primary py-3 px-5">Explore Our Menu</a>
              </div>
            @else
              <div class="cart-list table-responsive">
                <table class="table text-center table-bordered">
                  <thead class="thead-primary">
                    <tr class="text-center">
                      <th>&nbsp;</th>
                      <th>Product</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($cart as $item)
                      @php
                        $subtotal = $item['price'] * $item['quantity'];
                      @endphp
                      <tr class="text-center align-middle">
                        <td class="product-remove">
                          <a href="{{ route('cart.remove', $item['id']) }}" class="btn btn-outline-danger btn-sm" onclick="return confirm('Remove this item?');">
                            <span class="ion-ios-close"></span>
                          </a>
                        </td>
                        
                        <td class="image-prod d-flex align-items-center justify-content-center">
                          <div class="img mr-3" style="background-image: url('{{ asset('assets/images/' . $item['image']) }}'); width: 60px; height: 60px; background-size: cover; border-radius: 8px;"></div>
                          <div class="text-left">
                            <h3 class="mb-0">{{ $item['name'] }}</h3>
                            <small class="text-muted">{{ $item['category'] }}</small>
                          </div>
                        </td>
                        
                        <td class="price">${{ number_format($item['price'], 2) }}</td>
                        
                        <td class="quantity">
                          <form method="POST" action="{{ route('cart.update') }}" class="d-inline-flex justify-content-center align-items-center">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $item['id'] }}">
                            <input type="number" name="quantity" class="form-control text-center mx-1" value="{{ $item['quantity'] }}" min="1" max="50" style="width: 70px; background: rgba(255,255,255,0.05); color: #fff;">
                            <button type="submit" class="btn btn-sm btn-outline-white" title="Update quantity">Update</button>
                          </form>
                        </td>
                        
                        <td class="total font-weight-bold" style="color: #fac564;">${{ number_format($subtotal, 2) }}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>

              <div class="d-flex justify-content-between mt-3 mb-5">
                <a href="{{ route('menu') }}" class="btn btn-outline-white py-2 px-4">&larr; Continue Shopping</a>
                <a href="{{ route('cart.clear') }}" class="btn btn-outline-danger py-2 px-4" onclick="return confirm('Are you sure you want to clear your cart?');">Clear Cart</a>
              </div>

              <div class="row justify-content-end">
                <div class="col col-lg-5 col-md-6 mt-4 cart-wrap ftco-animate">
                  <div class="cart-total mb-3 p-4" style="border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; background: rgba(0,0,0,0.4);">
                    <h3 class="mb-3">Cart Totals</h3>
                    <p class="d-flex justify-content-between">
                      <span>Subtotal</span>
                      <span>${{ number_format($total, 2) }}</span>
                    </p>
                    <p class="d-flex justify-content-between">
                      <span>Standard Delivery</span>
                      <span class="text-success">FREE</span>
                    </p>
                    <hr style="border-color: rgba(255,255,255,0.1);">
                    <p class="d-flex justify-content-between font-weight-bold" style="font-size: 20px;">
                      <span>Total Amount</span>
                      <span style="color: #fac564;">${{ number_format($total, 2) }}</span>
                    </p>
                    <div class="mt-4">
                      <a href="{{ route('checkout.index') }}" class="btn btn-primary btn-block py-3">Proceed to Checkout &rarr;</a>
                    </div>
                  </div>
                </div>
              </div>
            @endif
          </div>
        </div>
			</div>
		</section>
@endsection
