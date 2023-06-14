@extends('../../../layouts/client/index')

@section('property')
  
@endsection


@section('title')
  <title>Contact</title>
@endsection

@section('style')
@endsection


@section('content')
    <!-- Banner Section Start -->
    <section class="inner-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="breadcrumb-content position-relative">

                        <h1 class="breadcrumb-title text-white">Contacts</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
		<!-- Nos services -->
		<section class="home-category-section mt-5">
			<div class="container">
				<h2 class="text-center">Nos Services</h2>
				<p class="text-center">Nos différents offres en fonction de vos besoins.</p>
				<div class="row justify-content-center mt-3">
					<div class="col-lg-2 col-md-4 mb-3 mb-md-0">
						<div class="card border-0 category-box">
							<div class="card-body text-center">
								<img src="{{asset('assets/client/images/category-1.png')}}" alt="category-image" class="img-fluid mb-3">
								<h3 class="font-20"><a href="#" class="text-decoration-none stretched-link">Appartements</a></h3>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 mb-3 mb-md-0">
						<div class="card border-0 category-box">
							<div class="card-body text-center">
								<img src="{{asset('assets/client/images/category-2.png')}}" alt="category-image" class="img-fluid mb-3">
								<h3 class="font-20"><a href="#" class="text-decoration-none stretched-link">Maisons</a></h3>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 mb-3 mb-md-0">
						<div class="card border-0 category-box">
							<div class="card-body text-center">
								<img src="{{asset('assets/client/images/category-3.png')}}" alt="category-image" class="img-fluid mb-3">
								<h3 class="font-20"><a href="#" class="text-decoration-none stretched-link">Maisons en Location</a></h3>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 mb-3 mb-md-0">
						<div class="card border-0 category-box">
							<div class="card-body text-center">
								<img src="{{asset('assets/client/images/category-4.png')}}" alt="category-image" class="img-fluid mb-3">
								<h3 class="font-20"><a href="#" class="text-decoration-none stretched-link">Boutiques</a></h3>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 mb-3 mb-md-0">
						<div class="card border-0 category-box">
							<div class="card-body text-center">
								<img src="{{asset('assets/client/images/category-5.png')}}" alt="category-image" class="img-fluid mb-3">
								<h3 class="font-20"><a href="#" class="text-decoration-none stretched-link">Bureaux</a></h3>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 mb-3 mb-md-0">
						<div class="card border-0 category-box">
							<div class="card-body text-center">
								<img src="{{asset('assets/client/images/category-6.png')}}" alt="category-image" class="img-fluid mb-3">
								<h3 class="font-20"><a href="#" class="text-decoration-none stretched-link">Maisons familliales</a></h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Nos services -->
@endsection


@section('scripts')
<script>
    
</script>
@endsection