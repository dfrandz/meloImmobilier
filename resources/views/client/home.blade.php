@extends('../../layouts/client/index')

@section('property')
  
@endsection


@section('title')
  <title>Booking</title>
@endsection

@section('style')
<style>

	.swiper {
      width: 100%;
      /* padding-top: 10px; */
      padding-bottom: 1px;
    }

    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 200px;
      height: 500px;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
	  object-fit: cover;
      height: 600px;
    }
  </style>
@endsection


@section('content')
   <!-- Banner Section Start -->
   
		
		<!-- Banner Section End -->
		<div class="swiper mySwiper-container">
			<div class="swiper-wrapper">
			  <div class="swiper-slide">
				<img src="{{asset('assets/client/images/b1.jpg')}}" />
			  </div>
			  <div class="swiper-slide">
				<img src="{{asset('assets/client/images/b2.jpg')}}" />
			  </div>
			  <div class="swiper-slide">
				<img src="{{asset('assets/client/images/banner-1.jpg')}}" />
			  </div>
			  <div class="swiper-slide">
				<img src="{{asset('assets/client/images/banner-2.jpg')}}" />
			  </div>
			  <div class="swiper-slide">
				<img src="{{asset('assets/client/images/banner-3.jpg')}}" />
			  </div>
			  <div class="swiper-slide">
				<img src="{{asset('assets/client/images/banner-4.jpg')}}" />
			  </div>
			  <div class="swiper-slide">
				<img src="{{asset('assets/client/images/banner-5.jpg')}}" />
			  </div>
			</div>
			<div class="swiper-pagination"></div>
		</div>


		
		<!-- search bar -->
		<div class="container" style="margin-top: 3px;">
			<div class="row justify-content-center">
				<div class="col-md-12" style="background-color: rgb(61,64,91); border-radius: 5px">
					<h1 class="text-white banner-title font-48 text-center">LOGONE REALTY
						<span class="typewrite text-orange" data-period="2000" data-type='["Appartements.", "Résidence." ]'>
						  <span class="wrap"></span>
						</span>
					</h1>
					<p class="banner-desc text-white font-22 text-center">Notre passion est de vous aider à trouver votre toile parfait. <br>
					désormais en un seul clic, vous avez votre logement à Lomé</p>
					
					<form class="banner-serach-form mt-5 mb-5">
						<ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link active" id="pills-buy-tab" data-bs-toggle="pill" data-bs-target="#pills-buy" type="button" role="tab" aria-controls="pills-buy" aria-selected="true">Acheter</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="pills-rent-tab" data-bs-toggle="pill" data-bs-target="#pills-rent" type="button" role="tab" aria-controls="pills-rent" aria-selected="false">
									Louer
								</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="pills-sale-tab" data-bs-toggle="pill" data-bs-target="#pills-sale" type="button" role="tab" aria-controls="pills-sale" aria-selected="false">Bien Meublé</button>
							</li>
						</ul>
						<div class="tab-content banner-serach-form-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-buy" role="tabpanel" aria-labelledby="pills-buy-tab">
								<div class="row"> 
									<div class="col-lg-4 col-sm-12">
										<input type="text" class="form-control mb-3 mb-lg-0" name="property-keyword" placeholder="Entrez des mots-clés..." value="">
									</div>
									<div class="col-lg-3 col-sm-6">
										<select class="form-select form-select-md mb-3 mb-lg-0" aria-label=".form-select-md example" name="property-type">
											<option selected>Type de propriété</option>
											<option value="Residential">piece</option>
											<option value="Commercial">chambre salon</option>
											<option value="Commercial">villa</option>
										</select>
									</div>
									{{-- <div class="col-lg-2 col-sm-6">
										<select class="form-select form-select-md mb-3 mb-md-0" aria-label=".form-select-md example" name="property-location">
											<option selected>Location</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
									</div> --}}
									<div class="col-lg-2 col-sm-6">
										<a class="btn btn-outline-warning more-search-btn w-100 mb-3 mb-md-0" data-bs-toggle="collapse" href="#more-option-acheter" role="button" aria-expanded="false" aria-controls="more-option">Autres Options<i class="fas fa-ellipsis-v ms-2"></i></a>
									</div>
									<div class="col-lg-2 col-sm-6">
										<a href="javascript:void(0)" class="btn btn-warning property-search w-100 mb-3 mb-md-0">Search</a>
									</div>
								</div>
							</div>

							<div class="tab-pane fade" id="pills-rent" role="tabpanel" aria-labelledby="pills-rent-tab">
								<div class="row"> 
									<div class="col-lg-4 col-sm-12">
										<input type="text" class="form-control mb-3 mb-lg-0" name="property-keyword" placeholder="Enter Keywords..." value="">
									</div>
									<div class="col-lg-2 col-sm-6">
										<select class="form-select form-select-md mb-3 mb-lg-0" aria-label=".form-select-md example" name="property-type">
											<option selected>Property Type</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
									</div>
									<div class="col-lg-2 col-sm-6">
										<select class="form-select form-select-md mb-3 mb-lg-0" aria-label=".form-select-md example" name="property-location">
											<option selected>Location</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
									</div>
									<div class="col-lg-2 col-sm-6">
										<a class="btn btn-outline-warning more-search-btn w-100 mb-3 mb-md-0" data-bs-toggle="collapse" href="#more-option-louer" role="button" aria-expanded="false" aria-controls="more-option">Plus d Option<i class="fas fa-ellipsis-v ms-2"></i></a>
									</div>
									<div class="col-lg-2 col-sm-6">
										<a href="javascript:void(0)" class="btn btn-warning property-search w-100 mb-3 mb-md-0">Search</a>
									</div>
								</div>
							</div>

							<div class="tab-pane fade" id="pills-sale" role="tabpanel" aria-labelledby="pills-sale-tab">
								<div class="row"> 
									<div class="col-lg-4 col-sm-12">
										<input type="text" class="form-control mb-3 mb-lg-0" name="property-keyword" placeholder="Enter Keywords..." value="">
									</div>
									<div class="col-lg-2 col-sm-6">
										<select class="form-select form-select-md mb-3 mb-lg-0" aria-label=".form-select-md example" name="property-type">
											<option selected>Property Type</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
									</div>
									<div class="col-lg-2 col-sm-6">
										<select class="form-select form-select-md mb-3 mb-lg-0" aria-label=".form-select-md example" name="property-location">
											<option selected>Location</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
									</div>
									<div class="col-lg-2 col-sm-6">
										<a class="btn btn-outline-warning more-search-btn w-100 mb-3 mb-md-0" data-bs-toggle="collapse" href="#more-option" role="button" aria-expanded="false" aria-controls="more-option">More Options<i class="fas fa-ellipsis-v ms-2"></i></a>
									</div>
									<div class="col-lg-2 col-sm-6">
										<a href="javascript:void(0)" class="btn btn-warning property-search w-100 mb-3 mb-md-0">Search</a>
									</div>
								</div>
							</div>
						</div>
						
						<!-- option acheter-->
						<div class="collapse mt-3 position-absolute more-option" id="more-option-acheter">
							<div class="card border-0">
								<div class="card-body">
									<div class="row">
										<div class="col-md-4 col-sm-12 mb-3">
											<select class="form-select form-select-md mb-3 mb-md-0" aria-label=".form-select-md example" name="property-rooms">
												<option selected>Type de biens</option>
												<option value="1">Pieces</option>
												<option value="2">Chambres</option>
												<option value="3">Villa</option>
											</select>
										</div>
										<div class="col-md-4 col-sm-12 mb-3">
											<select class="form-select form-select-md mb-3 mb-md-0" aria-label=".form-select-md example" name="property-rooms">
												<option selected>Max Chambres</option>
												<option value="1">1 Rooms</option>
												<option value="2">2 Rooms</option>
												<option value="3">3 Rooms</option>
												<option value="4">4 Rooms</option>
												<option value="5">5 Rooms</option>
											</select>
										</div>
										<div class="col-md-4 col-sm-12 mb-3">
											<select class="form-select form-select-md mb-3 mb-md-0" aria-label=".form-select-md example" name="property-bed">
												<option selected>Lits</option>
												<option value="1">1 Bedrooms</option>
												<option value="2">2 Bedrooms</option>
												<option value="3">3 Bedrooms</option>
												<option value="4">4 Bedrooms</option>
												<option value="5">5 Bedrooms</option>
											</select>
										</div>
										<div class="col-md-4 col-sm-12 mb-3">
											<select class="form-select form-select-md mb-3 mb-md-0" aria-label=".form-select-md example" name="property-bath">
												<option selected>Bains</option>
												<option value="1">1 Bathrooms</option>
												<option value="2">2 Bathrooms</option>
												<option value="3">3 Bathrooms</option>
												<option value="4">4 Bathrooms</option>
												<option value="5">5 Bathrooms</option>
											</select>
										</div>
										<div class="col-md-4 col-sm-12 mb-3">
											<select class="form-select form-select-md mb-3 mb-md-0" aria-label=".form-select-md example" name="property-bath">
												<option selected>Prix mini</option>
												<option value="1">15000</option>
												<option value="2">25000</option>
												<option value="4">50000</option>
												<option value="5">70000</option>
											</select>
										</div>
										<div class="col-md-4 col-sm-12 mb-3">
											<select class="form-select form-select-md mb-3 mb-md-0" aria-label=".form-select-md example" name="property-bath">
												<option selected>Prix maxi</option>
												<option value="1">15000</option>
												<option value="2">25000</option>
												<option value="4">50000</option>
												<option value="5">70000</option>
											</select>
										</div>
										
										
									</div>
									
								</div>
							</div>
						</div>

						<div class="collapse mt-3 position-absolute more-option" id="more-option-louer">
							<div class="card border-0">
								<div class="card-body">
									<div class="row">
										<div class="col-md-4 col-sm-12 mb-3">
											<select class="form-select form-select-md mb-3 mb-md-0" aria-label=".form-select-md example" name="property-rooms">
												<option selected>Type de biens</option>
												<option value="1">Pieces</option>
												<option value="2">Chambres</option>
												<option value="3">Villa</option>
											</select>
										</div>
										<div class="col-md-4 col-sm-12 mb-3">
											<select class="form-select form-select-md mb-3 mb-md-0" aria-label=".form-select-md example" name="property-rooms">
												<option selected>Max Chambres</option>
												<option value="1">1 Rooms</option>
												<option value="2">2 Rooms</option>
												<option value="3">3 Rooms</option>
												<option value="4">4 Rooms</option>
												<option value="5">5 Rooms</option>
											</select>
										</div>
										<div class="col-md-4 col-sm-12 mb-3">
											<select class="form-select form-select-md mb-3 mb-md-0" aria-label=".form-select-md example" name="property-bed">
												<option selected>Lits</option>
												<option value="1">1 Bedrooms</option>
												<option value="2">2 Bedrooms</option>
												<option value="3">3 Bedrooms</option>
												<option value="4">4 Bedrooms</option>
												<option value="5">5 Bedrooms</option>
											</select>
										</div>
										<div class="col-md-4 col-sm-12 mb-3">
											<select class="form-select form-select-md mb-3 mb-md-0" aria-label=".form-select-md example" name="property-bath">
												<option selected>Bains</option>
												<option value="1">1 Bathrooms</option>
												<option value="2">2 Bathrooms</option>
												<option value="3">3 Bathrooms</option>
												<option value="4">4 Bathrooms</option>
												<option value="5">5 Bathrooms</option>
											</select>
										</div>
										<div class="col-md-4 col-sm-12 mb-3">
											<select class="form-select form-select-md mb-3 mb-md-0" aria-label=".form-select-md example" name="property-bath">
												<option selected>Prix mini</option>
												<option value="1">15000</option>
												<option value="2">25000</option>
												<option value="4">50000</option>
												<option value="5">70000</option>
											</select>
										</div>
										<div class="col-md-4 col-sm-12 mb-3">
											<select class="form-select form-select-md mb-3 mb-md-0" aria-label=".form-select-md example" name="property-bath">
												<option selected>Prix maxi</option>
												<option value="1">15000</option>
												<option value="2">25000</option>
												<option value="4">50000</option>
												<option value="5">70000</option>
											</select>
										</div>
										
										
									</div>
									
								</div>
							</div>
						</div>
						
					</form>
				</div>
			</div>                
		</div>
		<!-- search bar -->
		
		<!-- autre propriete -->
		<section class="home-featured-property category-tab spacer mb-2">
			<div class="container">
				<h2 class="text-center">Autres Propietes</h2>
				<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<div class="product-content">
					<div class="row justify-content-center mb-4">
						<div class="col-md-8">
							<div class="product-tab">
								<ul class="list-unstyled text-center font-semibold font-13 mt-5">
									<li class="list-inline-item tab-item mb-3">
										<a class="tab-item px-2 py-1 rounded font-14 text-decoration-none active" data-filter=".all" href="#">Tous</a>
									</li>
									<li class="list-inline-item tab-item mb-3">
										<a class="tab-item px-2 py-1 rounded font-14 text-decoration-none" data-filter=".rentals" href="#">Pieces</a>
									</li>
									<li class="list-inline-item tab-item mb-3">
										<a class="tab-item px-2 py-1 rounded font-14 text-decoration-none" data-filter=".apartments" href="#">
											Chambre salon</a>
									</li>
									<li class="list-inline-item tab-item mb-3">
										<a class="tab-item px-2 py-1 rounded font-14 text-decoration-none" data-filter=".sales" href="#">Appartements</a>
									</li>
									<li class="list-inline-item tab-item mb-3">
										<a class="tab-item px-2 py-1 rounded font-14 text-decoration-none" data-filter=".houses" href="#">villa</a>
									</li>
									
								</ul>
							</div>
						</div>
					</div>
					<div class="content">
						<div class="product-item">
							<div class="row">
								<div class="col-md-6 col-lg-4 product-desc all rentals mb-4">
									<div class="card">
										<div class="featured-product-img position-relative">
											<img src="{{asset('assets/client/images/property-img/fe-property-img-7.jpg')}}" alt="latest-property" class="img-fluid w-100 latest-pro-img" />
											<div class="property-details mb-2">
												<h4 class="text-white mb-0">Prix<span>mo</span></h4>
												<div class="property-view ms-auto">
													<a href="#"><i class="fas fa-exchange-alt"></i></a>
													<a href="#"><i class="far fa-heart"></i></a>
												</div>
											</div>
											<div class="property-tag">
												<ul class="list-unstyled mb-0">
													<li class="bg-blue">A louer</li>
												</ul>
											</div>
											<span class="featured-property me-2 text-white bg-green"><i class="fas fa-star font-12"></i></span>
											<span class="hot-property me-2 text-white bg-orange"><i class="fas fa-fire font-12"></i></span>
										</div>
										<div class="card-body">
											<p class="text-orange mb-0">Categorie</p>
											<h4 class="font-20 product-title"><a href="page-property-single-v1.html" class="text-decoration-none">Modern Apartments</a></h4>
											<p><i class="fas fa-map-marker-alt"></i>Localisation</p>
											<ul class="list-unstyled d-flex justify-content-between mb-0">
												<li><p class="mb-0">3 <i class="fas fa-bed"></i></p>
												nombre lits
												<li><p class="mb-0">2 <i class="fas fa-sink"></i></p>
												nombre bains
												<li>
													<p class="mb-0">1250 <i class="fas fa-vector-square"></i></p>
													Surface
												</li>
											</ul>
										</div>
										
									</div>
								</div>
								<div class="col-md-6 col-lg-4 product-desc all rentals mb-4">
									<div class="card">
										<div class="featured-product-img position-relative">
											<img src="{{asset('assets/client/images/property-img/fe-property-img-7.jpg')}}" alt="latest-property" class="img-fluid w-100 latest-pro-img" />
											<div class="property-details mb-2">
												<h4 class="text-white mb-0">Prix<span>mo</span></h4>
												<div class="property-view ms-auto">
													<a href="#"><i class="fas fa-exchange-alt"></i></a>
													<a href="#"><i class="far fa-heart"></i></a>
												</div>
											</div>
											<div class="property-tag">
												<ul class="list-unstyled mb-0">
													<li class="bg-blue">A louer</li>
												</ul>
											</div>
											<span class="featured-property me-2 text-white bg-green"><i class="fas fa-star font-12"></i></span>
											<span class="hot-property me-2 text-white bg-orange"><i class="fas fa-fire font-12"></i></span>
										</div>
										<div class="card-body">
											<p class="text-orange mb-0">Categorie</p>
											<h4 class="font-20 product-title"><a href="page-property-single-v1.html" class="text-decoration-none">Modern Apartments</a></h4>
											<p><i class="fas fa-map-marker-alt"></i>Localisation</p>
											<ul class="list-unstyled d-flex justify-content-between mb-0">
												<li><p class="mb-0">3 <i class="fas fa-bed"></i></p>
												nombre lits
												<li><p class="mb-0">2 <i class="fas fa-sink"></i></p>
												nombre bains
												<li>
													<p class="mb-0">1250 <i class="fas fa-vector-square"></i></p>
													Surface
												</li>
											</ul>
										</div>
										
									</div>
								</div>
								<div class="col-md-6 col-lg-4 product-desc all sales mb-4">
									<div class="card">
										<div class="featured-product-img position-relative">
											<img src="{{asset('assets/client/images/property-img/fe-property-img-7.jpg')}}" alt="latest-property" class="img-fluid w-100 latest-pro-img" />
											<div class="property-details mb-2">
												<h4 class="text-white mb-0">Prix<span>mo</span></h4>
												<div class="property-view ms-auto">
													<a href="#"><i class="fas fa-exchange-alt"></i></a>
													<a href="#"><i class="far fa-heart"></i></a>
												</div>
											</div>
											<div class="property-tag">
												<ul class="list-unstyled mb-0">
													<li class="bg-blue">A louer</li>
												</ul>
											</div>
											<span class="featured-property me-2 text-white bg-green"><i class="fas fa-star font-12"></i></span>
											<span class="hot-property me-2 text-white bg-orange"><i class="fas fa-fire font-12"></i></span>
										</div>
										<div class="card-body">
											<p class="text-orange mb-0">Categorie</p>
											<h4 class="font-20 product-title"><a href="page-property-single-v1.html" class="text-decoration-none">Modern Apartments</a></h4>
											<p><i class="fas fa-map-marker-alt"></i>Localisation</p>
											<ul class="list-unstyled d-flex justify-content-between mb-0">
												<li><p class="mb-0">3 <i class="fas fa-bed"></i></p>
												nombre lits
												<li><p class="mb-0">2 <i class="fas fa-sink"></i></p>
												nombre bains
												<li>
													<p class="mb-0">1250 <i class="fas fa-vector-square"></i></p>
													Surface
												</li>
											</ul>
										</div>
										
									</div>
								</div>
								<div class="col-md-6 col-lg-4 product-desc all apartments mb-4">
									<div class="card">
										<div class="featured-product-img position-relative">
											<img src="{{asset('assets/client/images/property-img/fe-property-img-7.jpg')}}" alt="latest-property" class="img-fluid w-100 latest-pro-img" />
											<div class="property-details mb-2">
												<h4 class="text-white mb-0">Prix<span>mo</span></h4>
												<div class="property-view ms-auto">
													<a href="#"><i class="fas fa-exchange-alt"></i></a>
													<a href="#"><i class="far fa-heart"></i></a>
												</div>
											</div>
											<div class="property-tag">
												<ul class="list-unstyled mb-0">
													<li class="bg-blue">A louer</li>
												</ul>
											</div>
											<span class="featured-property me-2 text-white bg-green"><i class="fas fa-star font-12"></i></span>
											<span class="hot-property me-2 text-white bg-orange"><i class="fas fa-fire font-12"></i></span>
										</div>
										<div class="card-body">
											<p class="text-orange mb-0">Categorie</p>
											<h4 class="font-20 product-title"><a href="page-property-single-v1.html" class="text-decoration-none">Modern Apartments</a></h4>
											<p><i class="fas fa-map-marker-alt"></i>Localisation</p>
											<ul class="list-unstyled d-flex justify-content-between mb-0">
												<li><p class="mb-0">3 <i class="fas fa-bed"></i></p>
												nombre lits
												<li><p class="mb-0">2 <i class="fas fa-sink"></i></p>
												nombre bains
												<li>
													<p class="mb-0">1250 <i class="fas fa-vector-square"></i></p>
													Surface
												</li>
											</ul>
										</div>
										
									</div>
								</div>
								<div class="col-md-6 col-lg-4 product-desc all houses mb-4">
									<div class="card">
										<div class="featured-product-img position-relative">
											<img src="{{asset('assets/client/images/property-img/fe-property-img-7.jpg')}}" alt="latest-property" class="img-fluid w-100 latest-pro-img" />
											<div class="property-details mb-2">
												<h4 class="text-white mb-0">Prix<span>mo</span></h4>
												<div class="property-view ms-auto">
													<a href="#"><i class="fas fa-exchange-alt"></i></a>
													<a href="#"><i class="far fa-heart"></i></a>
												</div>
											</div>
											<div class="property-tag">
												<ul class="list-unstyled mb-0">
													<li class="bg-blue">A louer</li>
												</ul>
											</div>
											<span class="featured-property me-2 text-white bg-green"><i class="fas fa-star font-12"></i></span>
											<span class="hot-property me-2 text-white bg-orange"><i class="fas fa-fire font-12"></i></span>
										</div>
										<div class="card-body">
											<p class="text-orange mb-0">Categorie</p>
											<h4 class="font-20 product-title"><a href="page-property-single-v1.html" class="text-decoration-none">Modern Apartments</a></h4>
											<p><i class="fas fa-map-marker-alt"></i>Localisation</p>
											<ul class="list-unstyled d-flex justify-content-between mb-0">
												<li><p class="mb-0">3 <i class="fas fa-bed"></i></p>
												nombre lits
												<li><p class="mb-0">2 <i class="fas fa-sink"></i></p>
												nombre bains
												<li>
													<p class="mb-0">1250 <i class="fas fa-vector-square"></i></p>
													Surface
												</li>
											</ul>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="text-center mt-4">
					<a href="javascript:void(0)" class="btn btn-warning view-all-btn">Voir toutes les propriétés</a>
				</div>  
			</div>
		</section>
		<!-- autre propriete -->
		
		<!-- propriete en vedette -->

		<section class="home-featured-property spacer">
			<div class="container">
				<h2 class="text-center">Propriétés en vedette</h2>
				<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<div class="owl-carousel owl-theme featured-property-carousel mt-5">
					<div class="featured-item h-100">
						<div class="card h-100">
							<div class="featured-product-img position-relative">
								<img src="{{asset('assets/client/images/property-img/fe-property-img-1.jpg')}}" alt="featured-property" class="img-fluid w-100 fe-pro-img" />
								<div class="property-details mb-2">
									<h4 class="text-white mb-0">Prix<span></span></h4>
									<div class="property-view ms-auto">
										<a href="#"><i class="fas fa-exchange-alt"></i></a>
										<a href="#"><i class="far fa-heart"></i></a>
									</div>
								</div>
								<div class="property-tag">
									<ul class="list-unstyled mb-0">
										<li class="bg-blue">A louer</li>
									</ul>
								</div>
								<span class="featured-property me-2 text-white bg-green"><i class="fas fa-star font-12"></i></span>
								<span class="hot-property me-2 text-white bg-orange"><i class="fas fa-fire font-12"></i></span>
							</div>
							<div class="card-body d-flex flex-column">
								<p class="text-orange mb-0">Categorie</p>
								<h4 class="font-20 product-title"><a href="page-property-single-v2.html" class="text-decoration-none">Nom</a></h4>
								<p><i class="fas fa-map-marker-alt"></i>Localisation</p>
								<ul class="list-unstyled d-flex justify-content-between mb-0 mt-auto">
									<li><p class="mb-0">3 <i class="fas fa-bed"></i></p>
									Nombre lits</li>
									<li><p class="mb-0">2 <i class="fas fa-sink"></i></p>
									nombre bains</li>
									<li><p class="mb-0">1250 <i class="fas fa-vector-square"></i></p>Surface</li>
								</ul>
							</div>
							
						</div>
					</div>

				</div>
				<div class="text-center mt-4">
					<a href="javascript:void(0)" class="btn btn-warning view-all-btn">Voir toutes les propriétés</a>
				</div>
			</div>
		</section>
		<!-- propriete en vedette -->




		<!-- Nos services -->
		<section class="home-category-section mt-5">
			<div class="container">
				<h2 class="text-center">Nos Services</h2>
				<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<div class="row justify-content-center mt-3">
					<div class="col-lg-2 col-md-4 mb-3 mb-md-0">
						<div class="card border-0 category-box">
							<div class="card-body text-center">
								<img src="{{asset('assets/client/images/category-1.png')}}" alt="category-image" class="img-fluid mb-3">
								<h3 class="font-20"><a href="#" class="text-decoration-none stretched-link">Apartments</a></h3>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 mb-3 mb-md-0">
						<div class="card border-0 category-box">
							<div class="card-body text-center">
								<img src="{{asset('assets/client/images/category-2.png')}}" alt="category-image" class="img-fluid mb-3">
								<h3 class="font-20"><a href="#" class="text-decoration-none stretched-link">Houses</a></h3>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 mb-3 mb-md-0">
						<div class="card border-0 category-box">
							<div class="card-body text-center">
								<img src="{{asset('assets/client/images/category-3.png')}}" alt="category-image" class="img-fluid mb-3">
								<h3 class="font-20"><a href="#" class="text-decoration-none stretched-link">Rental House</a></h3>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 mb-3 mb-md-0">
						<div class="card border-0 category-box">
							<div class="card-body text-center">
								<img src="{{asset('assets/client/images/category-4.png')}}" alt="category-image" class="img-fluid mb-3">
								<h3 class="font-20"><a href="#" class="text-decoration-none stretched-link">Commercial</a></h3>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 mb-3 mb-md-0">
						<div class="card border-0 category-box">
							<div class="card-body text-center">
								<img src="{{asset('assets/client/images/category-5.png')}}" alt="category-image" class="img-fluid mb-3">
								<h3 class="font-20"><a href="#" class="text-decoration-none stretched-link">Office</a></h3>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 mb-3 mb-md-0">
						<div class="card border-0 category-box">
							<div class="card-body text-center">
								<img src="{{asset('assets/client/images/category-6.png')}}" alt="category-image" class="img-fluid mb-3">
								<h3 class="font-20"><a href="#" class="text-decoration-none stretched-link">Family House</a></h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Nos services -->

		<!-- temoignage -->
		<section class="home-testimonial-st2-section spacer">
            <div class="container">
                <h2 class="text-center">Temoignage</h2>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <div class="owl-carousel owl-theme testimonial-carousal-st2 mt-5 text-center">
                    <!-- item -->
                    <div class="item">
                        <div class="card content text-center shadow border">
                            <div class="card-body p-4">
                                <i class="fas fa-quote-right font-40 text-orange"></i>
                                <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus optio facilis beatae.</p>
                                <div class="testimonial-img">
                                    <img src="{{asset('assets/client/images/agents/team-member1.jpg')}}" alt="testimonial-profile">
                                </div>
                                <h4 class="mt-3">John Doe</h4>
                                <p class="mb-0">Estate Agent</p>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <!-- item -->
                    <div class="item">
                        <div class="card content text-center shadow border">
                            <div class="card-body p-4">
                                <i class="fas fa-quote-right font-40 text-orange"></i>
                            
                                <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus optio facilis beatae.</p>
                                <div class="testimonial-img">
                                    <img src="{{asset('assets/client/images/agents/team-member2.png')}}" alt="testimonial-profile">
                                </div>
                                <h4 class="mt-3">John Doe</h4>
                                <p class="mb-0">Estate Agent</p>
                            </div>
                        </div>
                        
                    </div>
                    <!-- item -->
                    <!-- item -->
                    <div class="item">
                        <div class="card content text-center shadow border">
                            <div class="card-body p-4">
                                <i class="fas fa-quote-right font-40 text-orange"></i>
                            
                                <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus optio facilis beatae.</p>
                                <div class="testimonial-img">
                                    <img src="{{asset('assets/client/images/agents/team-member3.png')}}" alt="testimonial-profile">
                                </div>
                                <h4 class="mt-3">John Doe</h4>
                                <p class="mb-0">Estate Agent</p>
                            </div>

                        </div>
                        
                    </div>
                    <!-- item -->
                    <!-- item -->
                    <div class="item">
                        <div class="card content text-center shadow border">
                            <div class="card-body p-4">
                                <i class="fas fa-quote-right font-40 text-orange"></i>
                            
                                <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus optio facilis beatae.</p>
                                <div class="testimonial-img">
                                    <img src="{{asset('assets/client/images/agents/team-member4.png')}}" alt="testimonial-profile">
                                </div>
                                <h4 class="mt-3">John Doe</h4>
                                <p class="mb-0">Estate Agent</p>
                            </div>

                        </div>
                        
                    </div>
                    <!-- item -->
                    
                </div>
            </div>
        </section>
		<!-- temoignage -->

		<!-- parteneiares -->
		<section class="our-clients-section spacer mb-5">
			<div class="container">
				<h2 class="text-center">Nos partenaires</h2>
				<p class="text-center">Nous travaillons uniquement avec les meilleures entreprises du monde entier</p>
 				<ul class="list-unstyled d-md-flex d-block justify-content-between align-items-center mt-5">
					<li>
						<img class="img-fluid" src="{{asset('assets/client/images/clients/1.png')}}" alt="our-clients-img">
					</li>
					<li>
						<img class="img-fluid" src="{{asset('assets/client/images/clients/2.png')}}" alt="our-clients-img">
					</li>
					<li>
						<img class="img-fluid" src="{{asset('assets/client/images/clients/3.png')}}" alt="our-clients-img">
					</li>
					<li>
						<img class="img-fluid" src="{{asset('assets/client/images/clients/4.png')}}" alt="our-clients-img">
					</li>
					<li>
						<img class="img-fluid" src="{{asset('assets/client/images/clients/5.png')}}" alt="our-clients-img">
					</li>
				</ul>

			</div>
		</section>
		<!-- parteneiares -->

@endsection


@section('scripts')
<script>
    var swiper = new Swiper(".mySwiper-container", {
		spaceBetween: 30,
		effect: "fade",
		loop:true,
		autoplay:{
		delay:7000,
		disableOneInteraction:false
		}
	});
  </script>
@endsection