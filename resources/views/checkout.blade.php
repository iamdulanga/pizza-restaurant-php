@extends('layouts.app')

@section('title', 'Pizza - Checkout')

@section('content')
    <section class="home-slider owl-carousel img" style="background-image: url('{{ asset('assets/images/bg_1.jpg') }}');">
      <div class="slider-item" style="background-image: url('{{ asset('assets/images/bg_3.jpg') }}');">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">
            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Checkout</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span class="mr-2"><a href="{{ route('cart.index') }}">Cart</a></span> <span>Checkout</span></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-xl-7 ftco-animate">
            <form action="{{ route('checkout.store') }}" method="POST" class="billing-form ftco-bg-dark p-4 p-md-5" style="border: 1px solid rgba(255,255,255,0.1); border-radius: 8px;">
              @csrf
              <h3 class="mb-4 billing-heading">Delivery Details</h3>
              
              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif

              <div class="row align-items-end">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="customer_name">Full Name *</label>
                    <input type="text" id="customer_name" name="customer_name" class="form-control" placeholder="John Doe" value="{{ old('customer_name') }}" required>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="customer_email">Email Address *</label>
                    <input type="email" id="customer_email" name="customer_email" class="form-control" placeholder="john@example.com" value="{{ old('customer_email') }}" required>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="customer_phone">Phone Number *</label>
                    <input type="text" id="customer_phone" name="customer_phone" class="form-control" placeholder="+1 234 567 890" value="{{ old('customer_phone') }}" required>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="customer_city">City / District *</label>
                    <input type="text" id="customer_city" name="customer_city" class="form-control" placeholder="New York" value="{{ old('customer_city') }}" required>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="customer_address">Street Delivery Address *</label>
                    <textarea id="customer_address" name="customer_address" class="form-control" rows="3" placeholder="Apartment, suite, unit, street address" required>{{ old('customer_address') }}</textarea>
                  </div>
                </div>

                <div class="col-md-12 mt-4">
                  <button type="submit" class="btn btn-primary py-3 px-4 btn-block font-weight-bold" style="font-size: 16px;">Place Order Now &rarr;</button>
                </div>
              </div>
            </form>
          </div>

          <div class="col-xl-5 mt-4 mt-xl-0">
            <div class="cart-detail ftco-bg-dark p-4 p-md-5" style="border: 1px solid rgba(255,255,255,0.1); border-radius: 8px;">
              <h3 class="billing-heading mb-4">Order Summary</h3>
              <ul class="list-unstyled">
                @foreach($cart as $item)
                  <li class="d-flex justify-content-between py-2" style="border-bottom: 1px dashed rgba(255,255,255,0.1);">
                    <span>
                      <strong>{{ $item['quantity'] }}x</strong> {{ $item['name'] }}
                    </span>
                    <span>${{ number_format($item['price'] * $item['quantity'], 2) }}</span>
                  </li>
                @endforeach
              </ul>

              <div class="mt-4 pt-2">
                <p class="d-flex justify-content-between">
                  <span>Subtotal</span>
                  <span>${{ number_format($total, 2) }}</span>
                </p>
                <p class="d-flex justify-content-between">
                  <span>Delivery</span>
                  <span class="text-success">FREE</span>
                </p>
                <hr style="border-color: rgba(255,255,255,0.1);">
                <p class="d-flex justify-content-between font-weight-bold" style="font-size: 20px;">
                  <span>Grand Total</span>
                  <span style="color: #fac564;">${{ number_format($total, 2) }}</span>
                </p>
              </div>

              <div class="p-3 mt-4" style="background: rgba(250, 197, 100, 0.1); border-left: 3px solid #fac564; border-radius: 4px;">
                <p class="mb-0 text-white"><span class="icon-clock-o mr-2" style="color: #fac564;"></span> Estimated Delivery: <strong>25 - 35 minutes</strong> after placing order.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
