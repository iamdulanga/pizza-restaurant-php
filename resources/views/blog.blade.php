@extends('layouts.app')

@section('title', 'Pizza - Our Blog')

@section('content')
    <section class="home-slider owl-carousel img" style="background-image: url('{{ asset('assets/images/bg_1.jpg') }}');">
      <div class="slider-item" style="background-image: url('{{ asset('assets/images/bg_3.jpg') }}');">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">
            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Read Our Blog</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span>Blog</span></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Stories, Recipes & News</h2>
            <p>Explore articles from our chefs about pizza traditions, secret spices, and kitchen tips.</p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="{{ route('blog.single') }}" class="block-20" style="background-image: url('{{ asset('assets/images/image_1.jpg') }}');">
              </a>
              <div class="text py-4 d-block">
              	<div class="meta">
                  <div><a href="#">Sept 10, 2026</a></div>
                  <div><a href="#">Chef Mario</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 12</a></div>
                </div>
                <h3 class="heading mt-2"><a href="{{ route('blog.single') }}">The Secret to the Perfect 48-Hour Pizza Dough</a></h3>
                <p>Learn how cold fermentation transforms simple flour and yeast into an airy, crispy, and digestable crust.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="{{ route('blog.single') }}" class="block-20" style="background-image: url('{{ asset('assets/images/image_2.jpg') }}');">
              </a>
              <div class="text py-4 d-block">
              	<div class="meta">
                  <div><a href="#">Sept 14, 2026</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 8</a></div>
                </div>
                <h3 class="heading mt-2"><a href="{{ route('blog.single') }}">Why San Marzano Tomatoes Reign Supreme</a></h3>
                <p>Grown in volcanic soil near Mount Vesuvius, discover why sweet Italian tomatoes define authentic pizza sauce.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="{{ route('blog.single') }}" class="block-20" style="background-image: url('{{ asset('assets/images/image_3.jpg') }}');">
              </a>
              <div class="text py-4 d-block">
              	<div class="meta">
                  <div><a href="#">Sept 20, 2026</a></div>
                  <div><a href="#">Staff</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 15</a></div>
                </div>
                <h3 class="heading mt-2"><a href="{{ route('blog.single') }}">Top 5 Cheeses Every Pizza Lover Must Know</a></h3>
                <p>From stringy Fior di Latte to pungent Gorgonzola, elevate your homemade and artisan pie cravings.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
