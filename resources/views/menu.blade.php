@extends('layouts.app')

@section('title', 'Pizza - Our Delicious Menu')

@section('content')
    <section class="home-slider owl-carousel img" style="background-image: url('{{ asset('assets/images/bg_1.jpg') }}');">
      <div class="slider-item" style="background-image: url('{{ asset('assets/images/bg_3.jpg') }}');">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">
            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Our Delicious Menu</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span>Menu</span></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Specialty Menu</h2>
            <p>Select your favorite dishes handcrafted with authentic Mediterranean passion and quality ingredients.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 text-center mb-5">
            <div class="btn-group" role="group">
              <a href="{{ route('menu', ['category' => 'all']) }}" class="btn {{ $selectedCategory == 'all' ? 'btn-primary' : 'btn-outline-white' }} px-4 py-2">All Items</a>
              <a href="{{ route('menu', ['category' => 'Pizza']) }}" class="btn {{ $selectedCategory == 'Pizza' ? 'btn-primary' : 'btn-outline-white' }} px-4 py-2">Pizza</a>
              <a href="{{ route('menu', ['category' => 'Burgers']) }}" class="btn {{ $selectedCategory == 'Burgers' ? 'btn-primary' : 'btn-outline-white' }} px-4 py-2">Burgers</a>
              <a href="{{ route('menu', ['category' => 'Pasta']) }}" class="btn {{ $selectedCategory == 'Pasta' ? 'btn-primary' : 'btn-outline-white' }} px-4 py-2">Pasta</a>
              <a href="{{ route('menu', ['category' => 'Drinks']) }}" class="btn {{ $selectedCategory == 'Drinks' ? 'btn-primary' : 'btn-outline-white' }} px-4 py-2">Drinks</a>
            </div>
          </div>
        </div>
    	</div>

    	<div class="container-wrap">
    		<div class="row no-gutters d-flex">
          @forelse($products as $product)
            <div class="col-lg-4 col-md-6 d-flex ftco-animate">
              <div class="services-wrap d-flex w-100">
                <a href="{{ route('products.show', $product->id) }}" class="img" style="background-image: url('{{ asset('assets/images/' . $product->image) }}');"></a>
                <div class="text p-4">
                  <h3><a href="{{ route('products.show', $product->id) }}" style="color: #fff;">{{ $product->name }}</a></h3>
                  <p>{{ $product->description }}</p>
                  <p class="price">
                    <span>${{ number_format($product->price, 2) }}</span>
                    <form method="POST" action="{{ route('cart.add') }}" class="d-inline ml-2">
                      @csrf
                      <input type="hidden" name="product_id" value="{{ $product->id }}">
                      <input type="hidden" name="quantity" value="1">
                      <button type="submit" class="btn btn-white btn-outline-white">Order</button>
                    </form>
                  </p>
                </div>
              </div>
            </div>
          @empty
            <div class="col-12 text-center py-5">
              <p>No products found in this category.</p>
            </div>
          @endforelse
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Our Menu Pricing Breakdown</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Transparent pricing on our traditional recipes.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            @foreach($pizzas->take(4) as $pizza)
              <div class="pricing-entry d-flex ftco-animate">
                <div class="img" style="background-image: url('{{ asset('assets/images/' . $pizza->image) }}');"></div>
                <div class="desc pl-3">
                  <div class="d-flex text align-items-center">
                    <h3><span>{{ $pizza->name }}</span></h3>
                    <span class="price">${{ number_format($pizza->price, 2) }}</span>
                  </div>
                  <div class="d-block">
                    <p>{{ $pizza->description }}</p>
                  </div>
                </div>
              </div>
            @endforeach
          </div>

          <div class="col-md-6">
            @foreach($pizzas->skip(4)->take(4) as $pizza)
              <div class="pricing-entry d-flex ftco-animate">
                <div class="img" style="background-image: url('{{ asset('assets/images/' . $pizza->image) }}');"></div>
                <div class="desc pl-3">
                  <div class="d-flex text align-items-center">
                    <h3><span>{{ $pizza->name }}</span></h3>
                    <span class="price">${{ number_format($pizza->price, 2) }}</span>
                  </div>
                  <div class="d-block">
                    <p>{{ $pizza->description }}</p>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
@endsection
