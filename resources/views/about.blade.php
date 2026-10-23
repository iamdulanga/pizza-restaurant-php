@extends('layouts.app')

@section('title', 'Pizza - About Us')

@section('content')
    <section class="home-slider owl-carousel img" style="background-image: url('{{ asset('assets/images/bg_1.jpg') }}');">
      <div class="slider-item" style="background-image: url('{{ asset('assets/images/bg_3.jpg') }}');">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">
            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">About Us</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span>About</span></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3>+2 392 3929 210</h3>
	    						<p>Quick delivery hotline</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3>198 West 21th Street</h3>
	    						<p>Suite 721 New York NY 10016</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Open Monday-Friday</h3>
	    						<p>8:00am - 9:00pm</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="social d-md-flex pl-md-5 p-4 align-items-center">
	    			<ul class="social-icon">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
	    		</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url('{{ asset('assets/images/about.jpg') }}');"></div>
    	<div class="one-half ftco-animate">
        <div class="heading-section ftco-animate">
          <h2 class="mb-4">Welcome to <span class="flaticon-pizza">Pizza</span> Restaurant</h2>
        </div>
        <div>
  				<p>We take pride in bringing genuine Italian culinary heritage straight to your table. Our hand-stretched dough ferments slowly for 48 hours before baking in stone hearth ovens to create the unforgettable airy crust and crisp bite.</p>
          <p>Every sauce is simmered from Italian San Marzano tomatoes, and every pie is generously layered with aged cheeses and freshly chopped aromatic herbs.</p>
  			</div>
    	</div>
    </section>

    <section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Master Chefs</h2>
            <p>Our culinary artisans combine decades of Mediterranean cooking experience.</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url('{{ asset('assets/images/person_1.jpg') }}');"></div>
      				<div class="info text-center">
      					<h3>Tom Smith</h3>
      					<span class="position">Head Pizza Chef</span>
      					<div class="text">
	        				<p>Specializes in sourdough fermentation and authentic Neapolitan crusts.</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url('{{ asset('assets/images/person_2.jpg') }}');"></div>
      				<div class="info text-center">
      					<h3>Mark Wilson</h3>
      					<span class="position">Sous Chef</span>
      					<div class="text">
	        				<p>Master of handmade pastas and artisanal sauce reductions.</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url('{{ asset('assets/images/person_3.jpg') }}');"></div>
      				<div class="info text-center">
      					<h3>Patrick Jacobson</h3>
      					<span class="position">Grill Specialist</span>
      					<div class="text">
	        				<p>Curates our seasoned artisan burger patties and meat toppings.</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url('{{ asset('assets/images/person_4.jpg') }}');"></div>
      				<div class="info text-center">
      					<h3>Ivan Jacobson</h3>
      					<span class="position">Dessert & Drink Crafter</span>
      					<div class="text">
	        				<p>Crafts delightful Italian mocktails, sodas, and sweet accompaniments.</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        </div>
      </div>
    </section>
@endsection
