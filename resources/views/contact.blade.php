@extends('layouts.app')

@section('title', 'Pizza - Contact Us')

@section('content')
    <section class="home-slider owl-carousel img" style="background-image: url('{{ asset('assets/images/bg_1.jpg') }}');">
      <div class="slider-item" style="background-image: url('{{ asset('assets/images/bg_3.jpg') }}');">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">
            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Contact Us</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span>Contact</span></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container mt-5">
        <div class="row block-9">
					<div class="col-md-4 contact-info ftco-animate">
						<div class="row">
							<div class="col-md-12 mb-4">
	              <h2 class="h4">Contact Information</h2>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Phone:</span> <a href="tel://1234567920">+2 392 3929 210</a></p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Email:</span> <a href="mailto:info@pizzarestaurant.com">info@pizzarestaurant.com</a></p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Hours:</span> Monday - Sunday, 8:00 AM - 10:00 PM</p>
	            </div>
						</div>
					</div>
					<div class="col-md-1"></div>
          <div class="col-md-7 ftco-animate">
            <form action="{{ route('contact.submit') }}" method="POST" class="contact-form p-4 ftco-bg-dark" style="border: 1px solid rgba(255,255,255,0.1); border-radius: 8px;">
              @csrf
              <h3 class="mb-4">Send Us a Message</h3>

              @if($errors->any())
                <div class="alert alert-danger">
                  <ul class="mb-0">
                    @foreach($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif

            	<div class="row">
            		<div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" name="name" class="form-control" placeholder="Your Name *" value="{{ old('name') }}" required>
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  <input type="email" name="email" class="form-control" placeholder="Your Email *" value="{{ old('email') }}" required>
	                </div>
	              </div>
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Subject" value="{{ old('subject') }}">
              </div>
              <div class="form-group">
                <textarea name="message" cols="30" rows="6" class="form-control" placeholder="Your Message *" required>{{ old('message') }}</textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5 font-weight-bold">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
@endsection
