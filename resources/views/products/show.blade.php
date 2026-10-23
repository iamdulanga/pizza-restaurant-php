@extends('layouts.app')

@section('title', 'Pizza - ' . $product->name)

@section('content')
    <section class="home-slider owl-carousel img" style="background-image: url('{{ asset('assets/images/bg_1.jpg') }}');">
      <div class="slider-item" style="background-image: url('{{ asset('assets/images/bg_3.jpg') }}');">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">
            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">{{ $product->name }}</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span class="mr-2"><a href="{{ route('menu') }}">Menu</a></span> <span>Details</span></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="{{ asset('assets/images/' . $product->image) }}" class="image-popup prod-img-bg">
              <img src="{{ asset('assets/images/' . $product->image) }}" class="img-fluid rounded shadow" alt="{{ $product->name }}" style="width: 100%; max-height: 480px; object-fit: cover;">
            </a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3>{{ $product->name }}</h3>
    				<div class="rating d-flex mb-3">
							<p class="text-left mr-4">
								<a href="#" class="mr-2" style="color: #fac564;">5.0</a>
								<a href="#"><span class="ion-ios-star" style="color: #fac564;"></span></a>
								<a href="#"><span class="ion-ios-star" style="color: #fac564;"></span></a>
								<a href="#"><span class="ion-ios-star" style="color: #fac564;"></span></a>
								<a href="#"><span class="ion-ios-star" style="color: #fac564;"></span></a>
								<a href="#"><span class="ion-ios-star" style="color: #fac564;"></span></a>
							</p>
              <p class="text-left">
                <span class="badge badge-primary px-3 py-2 text-uppercase">{{ $product->category }}</span>
              </p>
						</div>
    				<p class="price" style="font-size: 32px; color: #fac564; font-weight: bold;">
              <span>${{ number_format($product->price, 2) }}</span>
            </p>
    				<p class="text-white mb-4" style="font-size: 16px; line-height: 1.8;">
              {{ $product->description }}
            </p>
            
            <form action="{{ route('cart.add') }}" method="POST">
              @csrf
              <input type="hidden" name="product_id" value="{{ $product->id }}">
              <div class="row mt-4">
                <div class="w-100"></div>
                <div class="input-group col-md-6 d-flex mb-3">
                  <span class="input-group-btn mr-2">
                    <button type="button" class="quantity-left-minus btn" data-type="minus" data-field="" style="background: rgba(255,255,255,0.1); color: #fff;" onclick="var q=document.getElementById('quantity'); if(q.value>1) q.value--;">
                      <i class="ion-ios-remove"></i>
                    </button>
                  </span>
                  <input type="number" id="quantity" name="quantity" class="form-control input-number text-center" value="1" min="1" max="50" style="background: rgba(255,255,255,0.05); color: #fff;">
                  <span class="input-group-btn ml-2">
                    <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="" style="background: rgba(255,255,255,0.1); color: #fff;" onclick="var q=document.getElementById('quantity'); q.value++;">
                      <i class="ion-ios-add"></i>
                    </button>
                  </span>
                </div>
                <div class="w-100"></div>
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary py-3 px-5 font-weight-bold" style="font-size: 16px;">Add to Cart &rarr;</button>
                  <a href="{{ route('menu') }}" class="btn btn-outline-white py-3 px-4 ml-2">Back to Menu</a>
                </div>
              </div>
            </form>
    			</div>
    		</div>

        @if($relatedProducts->count() > 0)
          <div class="row mt-5 pt-5">
            <div class="col-md-12 heading-section text-center ftco-animate mb-4">
              <h2>You Might Also Like</h2>
            </div>
            @foreach($relatedProducts as $rel)
              <div class="col-md-4 ftco-animate">
                <div class="services-wrap d-flex">
                  <a href="{{ route('products.show', $rel->id) }}" class="img" style="background-image: url('{{ asset('assets/images/' . $rel->image) }}');"></a>
                  <div class="text p-4">
                    <h3><a href="{{ route('products.show', $rel->id) }}" style="color: #fff;">{{ $rel->name }}</a></h3>
                    <p>{{ $rel->description }}</p>
                    <p class="price">
                      <span>${{ number_format($rel->price, 2) }}</span>
                      <a href="{{ route('products.show', $rel->id) }}" class="ml-2 btn btn-white btn-outline-white">View</a>
                    </p>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        @endif
    	</div>
    </section>
@endsection
