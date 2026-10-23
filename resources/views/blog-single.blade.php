@extends('layouts.app')

@section('title', 'Pizza - Blog Article')

@section('content')
    <section class="home-slider owl-carousel img" style="background-image: url('{{ asset('assets/images/bg_1.jpg') }}');">
      <div class="slider-item" style="background-image: url('{{ asset('assets/images/bg_3.jpg') }}');">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">
            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Blog Article</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span class="mr-2"><a href="{{ route('blog') }}">Blog</a></span> <span>Article</span></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
            <h2 class="mb-3 text-white">The Secret to the Perfect 48-Hour Pizza Dough</h2>
            <p>Every legendary pizza starts with the dough. In our kitchen, flour, cold mountain water, sea salt, and minimal yeast undergo a 48-hour cold proofing process.</p>
            <p>
              <img src="{{ asset('assets/images/image_1.jpg') }}" alt="Pizza Dough Making" class="img-fluid rounded">
            </p>
            <p>During cold fermentation, natural enzymes break down complex starches into simple sugars. This not only develops rich aromatic complexity reminiscent of sourdough, but also produces a lightweight crust that toasts blisteringly hot in our 800-degree stone ovens without feeling heavy.</p>

            <h3 class="mb-3 mt-5 text-white">Why Quality Ingredients Matter</h3>
            <p>Never underestimate the simplicity of pizza. When you only use five core ingredients—flour, water, tomatoes, cheese, and basil—each ingredient must be of the highest pedigree.</p>
            <p>
              <img src="{{ asset('assets/images/image_2.jpg') }}" alt="Stone Oven Baking" class="img-fluid rounded">
            </p>
            <p>We source authentic San Marzano DOP tomatoes directly from the plains surrounding Mount Vesuvius. The volcanic soil imparts natural sweetness with zero metallic acidity, meaning no added sugars are ever required.</p>
            
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Pizza</a>
                <a href="#" class="tag-cloud-link">Culinary</a>
                <a href="#" class="tag-cloud-link">Italian</a>
                <a href="#" class="tag-cloud-link">Recipes</a>
              </div>
            </div>

            <div class="about-author d-flex p-4 ftco-bg-dark rounded">
              <div class="bio mr-4">
                <img src="{{ asset('assets/images/person_1.jpg') }}" alt="Chef Mario" class="img-fluid mb-4 rounded-circle" style="width: 90px; height: 90px; object-fit: cover;">
              </div>
              <div class="desc">
                <h3>Chef Mario Rossi</h3>
                <p>Executive Pizza Maestro with over 20 years of Neapolitan pizza making experience. Passionate about sourdough fermentation and regional Italian ingredients.</p>
              </div>
            </div>
          </div>

          <!-- Sidebar -->
          <div class="col-md-4 sidebar ftco-animate">
            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Categories</h3>
                <li><a href="{{ route('menu', ['category' => 'Pizza']) }}">Pizza <span>(8)</span></a></li>
                <li><a href="{{ route('menu', ['category' => 'Burgers']) }}">Burgers <span>(3)</span></a></li>
                <li><a href="{{ route('menu', ['category' => 'Pasta']) }}">Pasta <span>(3)</span></a></li>
                <li><a href="{{ route('menu', ['category' => 'Drinks']) }}">Drinks <span>(3)</span></a></li>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Recent Articles</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url('{{ asset('assets/images/image_1.jpg') }}');"></a>
                <div class="text">
                  <h3 class="heading"><a href="{{ route('blog.single') }}">The 48-Hour Cold Fermentation Method</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 10, 2026</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url('{{ asset('assets/images/image_2.jpg') }}');"></a>
                <div class="text">
                  <h3 class="heading"><a href="{{ route('blog.single') }}">The Origins of San Marzano Tomatoes</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2026</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
