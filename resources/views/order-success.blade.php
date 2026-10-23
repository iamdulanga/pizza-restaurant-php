@extends('layouts.app')

@section('title', 'Pizza - Order Confirmed!')

@section('content')
    <section class="home-slider owl-carousel img" style="background-image: url('{{ asset('assets/images/bg_1.jpg') }}');">
      <div class="slider-item" style="background-image: url('{{ asset('assets/images/bg_3.jpg') }}');">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">
            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Order Confirmed!</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span>Success</span></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 text-center ftco-animate">
            <div class="p-4 p-md-5 ftco-bg-dark text-left" style="border: 1px solid rgba(255,255,255,0.1); border-radius: 12px;">
              <div class="text-center mb-4">
                <span class="icon-check_circle" style="font-size: 64px; color: #28a745;"></span>
                <h2 class="mt-3 text-white font-weight-bold">Thank You For Your Order!</h2>
                <p class="text-muted">Your order has been received and our kitchen is preparing your fresh meal.</p>
              </div>

              <div class="row mb-4 p-3" style="background: rgba(255,255,255,0.03); border-radius: 8px;">
                <div class="col-sm-6 mb-2">
                  <small class="text-muted d-block">Order Reference</small>
                  <strong>#ORD-{{ str_pad($order->id, 5, '0', STR_PAD_LEFT) }}</strong>
                </div>
                <div class="col-sm-6 mb-2">
                  <small class="text-muted d-block">Order Date</small>
                  <strong>{{ $order->created_at->format('M d, Y h:i A') }}</strong>
                </div>
                <div class="col-sm-6 mb-2">
                  <small class="text-muted d-block">Customer</small>
                  <strong>{{ $order->customer_name }} ({{ $order->customer_phone }})</strong>
                </div>
                <div class="col-sm-6 mb-2">
                  <small class="text-muted d-block">Delivery Address</small>
                  <strong>{{ $order->customer_address }}, {{ $order->customer_city }}</strong>
                </div>
              </div>

              <h4 class="mb-3 text-white">Items Ordered</h4>
              <div class="table-responsive">
                <table class="table text-white mb-0" style="border-color: rgba(255,255,255,0.1);">
                  <thead>
                    <tr class="text-muted">
                      <th>Item</th>
                      <th class="text-center">Qty</th>
                      <th class="text-right">Price</th>
                      <th class="text-right">Subtotal</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($order->items as $item)
                      <tr>
                        <td>
                          <strong>{{ $item->product_name }}</strong>
                        </td>
                        <td class="text-center">{{ $item->quantity }}</td>
                        <td class="text-right">${{ number_format($item->price, 2) }}</td>
                        <td class="text-right" style="color: #fac564;">${{ number_format($item->price * $item->quantity, 2) }}</td>
                      </tr>
                    @endforeach
                    <tr class="font-weight-bold" style="font-size: 18px; border-top: 2px solid rgba(255,255,255,0.2);">
                      <td colspan="3" class="text-right">Total Paid / Due on Delivery:</td>
                      <td class="text-right" style="color: #fac564;">${{ number_format($order->order_cost, 2) }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="text-center mt-5">
                <a href="{{ route('home') }}" class="btn btn-outline-white py-3 px-4 mr-2">Return Home</a>
                <a href="{{ route('menu') }}" class="btn btn-primary py-3 px-4">Order More Items</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
