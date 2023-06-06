@extends('../../../layouts/client/index')

@section('property')
  
@endsection


@section('title')
  <title>Location</title>
@endsection

@section('style')
@endsection


@section('content')

<div class="property-grid-listing">
    <div class="blog-single-breadcrumb mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title font-30 mt-3">Location</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="property-listing-section pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    
                    <div class="sidebar-search-property mb-4 pb-1">
                        <div class="card border-0">
                            <div class="card-body p-4">
                                <form class="search-property-form">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-6">
                                            <input type="text" class="form-control font-14 mb-3" name="se-keyword" placeholder="Entrez des mots-clés..." value="">
                                        </div>
                                        <div class="col-lg-12 col-md-6">
                                            <select class="form-select font-14 form-select-md mb-3" aria-label=".form-select-md example" name="se-property-type">
                                                <option selected="">Type de proprite</option>
                                                <option value="Commercial">villa</option>
                                                <option value="Commercial">appartement meublé</option>
                                                <option value="Commercial">appartement simple</option>
                                                <option value="Commercial">piece</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 col-md-6">
                                            <select class="form-select font-14 form-select-md mb-3" aria-label=".form-select-md example" name="se-property-location">
                                                <option selected="">Localité</option>
                                                <option value="Commercial">Lomé ville</option>
                                                <option value="Commercial">Adidogomé</option>
                                                <option value="Commercial">Agoe</option>
                                            </select>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-6">
                                            <select class="form-select form-select-md mb-3 font-14" aria-label=".form-select-md example" name="se-property-bed">
                                                <option selected="">Chambres</option>
                                                <option value="1">1 Chambres</option>
                                                <option value="2">2 Chambres</option>
                                                <option value="3">3 Chambres</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 col-md-6">
                                            <select class="form-select form-select-md mb-3 font-14" aria-label=".form-select-md example" name="se-property-bath">
                                                <option selected="">Salles de bains</option>
                                                <option value="1">1 Salles de bains</option>
                                                <option value="2">2 Salles de bains</option>
                                            </select>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <input type="text" name="se-min-price" class="form-control font-14 mb-3" placeholder="Prix minimal">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="se-max-price" class="form-control font-14 mb-3" placeholder="Prix maximal">
                                        </div>
                                       
                                        <div class="col-lg-12 col-md-6">
                                            <a class="text-decoration-none font-14 text-orange" data-bs-toggle="collapse" href="#more-option" role="button" aria-expanded="false" aria-controls="more-option"><i class="fas fa-ellipsis-v me-2"></i>Plus d'Options</a>
                                        </div>
                                    </div>
                                    <div class="collapse more-option" id="more-option">

                                        <div class="row mt-2">
                                            <div class="col-md-6 pb-2">
                                                <div class="form-check d-flex align-items-center">
                                                    <input id="Air-Condition" class="form-check-input font-14" type="checkbox" name="amenities[]" value="Air Condition">
                                                    <label for="Air-Condition" class="ms-2 form-check-label font-14">Climatisation</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pb-2">
                                                <div class="form-check d-flex align-items-center">
                                                    <input id="Parking" class="form-check-input font-14" type="checkbox" name="amenities[]" value="Parking">
                                                    <label for="Parking" class="ms-2 form-check-label font-14">Parking</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pb-2">
                                                <div class="form-check d-flex align-items-center">
                                                    <input id="Parking" class="form-check-input font-14" type="checkbox" name="amenities[]" value="Parking">
                                                    <label for="Parking" class="ms-2 form-check-label font-14">Machine a laver</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pb-2">
                                                <div class="form-check d-flex align-items-center">
                                                    <input id="Parking" class="form-check-input font-14" type="checkbox" name="amenities[]" value="Parking">
                                                    <label for="Parking" class="ms-2 form-check-label font-14">Wifi</label>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="javascript:void(0)" class="btn btn-warning property-search w-100 mt-3">Rechercher</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-category-widget mb-4 pb-1">
                        <div class="card border-0">
                            <div class="card-body p-4">
                                <h4 class="title mb-4">Catégorie de propriété</h4>

                                <ul class="list-unstyled">
                                    <li><a href="#" class="d-flex align-items-center text-decoration-none">Apartment <span class="ms-auto">6 properties</span></a></li>
                                    <li><a href="#" class="d-flex align-items-center text-decoration-none">Maison familiale <span class="ms-auto">8 properties</span></a></li>
                                    <li><a href="#" class="d-flex align-items-center text-decoration-none">Villa moderne<span class="ms-auto">16 properties</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="sidebar-top-rated-pro-widget mb-4 pb-1">
                        <div class="card border-0">
                            <div class="card-body p-4">
                                <h4 class="title mb-4">Top Rated Property</h4>
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <a href="#"><img src="assets/images/blog/7.jpg" class="img-fluid h-100 rounded top-pro-image" alt="blog-image"></a>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="mb-0 mt-2 mt-md-0"><a href="#" class="text-decoration-none"> Lorem ipsum dolor sit cing</a></h6>
                                        <ul class="property-rating list-inline mb-0">
                                            <li class="list-inline-item me-0"><a href="#"><i class="fas fa-star text-warning"></i></a></li>
                                            <li class="list-inline-item me-0"><a href="#"><i class="fas fa-star text-warning"></i></a></li>
                                            <li class="list-inline-item me-0"><a href="#"><i class="fas fa-star text-warning"></i></a></li>
                                            <li class="list-inline-item me-0"><a href="#"><i class="fas fa-star text-warning"></i></a></li>
                                            <li class="list-inline-item me-0"><a href="#"><i class="fas fa-star text-warning"></i></a></li>
                                        </ul>
                                        <div class="product-price">
                                            <span class="text-orange font-14">$30,000.00</span>
                                            <del>$35,000.00</del>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <a href="#"><img src="assets/images/blog/7.jpg" class="img-fluid h-100 rounded top-pro-image" alt="blog-image"></a>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="mb-0 mt-2 mt-md-0"><a href="#" class="text-decoration-none"> Lorem ipsum dolor sit cing</a></h6>
                                        <ul class="property-rating list-inline mb-0">
                                            <li class="list-inline-item me-0"><a href="#"><i class="fas fa-star text-warning"></i></a></li>
                                            <li class="list-inline-item me-0"><a href="#"><i class="fas fa-star text-warning"></i></a></li>
                                            <li class="list-inline-item me-0"><a href="#"><i class="fas fa-star text-warning"></i></a></li>
                                            <li class="list-inline-item me-0"><a href="#"><i class="fas fa-star text-warning"></i></a></li>
                                            <li class="list-inline-item me-0"><a href="#"><i class="far fa-star text-warning"></i></a></li>
                                        </ul>
                                        <div class="product-price">
                                            <span class="text-orange font-14">$30,000.00</span>
                                            <del>$35,000.00</del>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <a href="#"><img src="assets/images/blog/7.jpg" class="img-fluid h-100 rounded top-pro-image" alt="blog-image"></a>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="mb-0 mt-2 mt-md-0"><a href="#" class="text-decoration-none"> Lorem ipsum dolor sit cing</a></h6>
                                        <ul class="property-rating list-inline mb-0">
                                            <li class="list-inline-item me-0"><a href="#"><i class="fas fa-star text-warning"></i></a></li>
                                            <li class="list-inline-item me-0"><a href="#"><i class="fas fa-star text-warning"></i></a></li>
                                            <li class="list-inline-item me-0"><a href="#"><i class="fas fa-star text-warning"></i></a></li>
                                            <li class="list-inline-item me-0"><a href="#"><i class="far fa-star text-warning"></i></a></li>
                                            <li class="list-inline-item me-0"><a href="#"><i class="far fa-star text-warning"></i></a></li>
                                        </ul>
                                        <div class="product-price">
                                            <span class="text-orange font-14">$30,000.00</span>
                                            <del>$35,000.00</del>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="#"><img src="assets/images/blog/7.jpg" class="img-fluid h-100 rounded top-pro-image" alt="blog-image"></a>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="mb-0 mt-2 mt-md-0"><a href="#" class="text-decoration-none"> Lorem ipsum dolor sit cing</a></h6>
                                        <ul class="property-rating list-inline mb-0">
                                            <li class="list-inline-item me-0"><a href="#"><i class="fas fa-star text-warning"></i></a></li>
                                            <li class="list-inline-item me-0"><a href="#"><i class="fas fa-star text-warning"></i></a></li>
                                            <li class="list-inline-item me-0"><a href="#"><i class="fas fa-star text-warning"></i></a></li>
                                            <li class="list-inline-item me-0"><a href="#"><i class="fas fa-star text-warning"></i></a></li>
                                            <li class="list-inline-item me-0"><a href="#"><i class="fas fa-star text-warning"></i></a></li>
                                        </ul>
                                        <div class="product-price">
                                            <span class="text-orange font-14">$30,000.00</span>
                                            <del>$35,000.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    
                </div>

                <div class="col-lg-8">
                    <div class="grid-search-result">
                        <div class="card border-0">
                            <div class="card-body px-4">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <p class="mb-md-0 text-dark font-14">Nombre de resultat</p>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-select font-14 form-select-md mb-3 mb-md-0" aria-label=".form-select-md example" name="property-status">
                                            <option selected>Localité</option>
                                            <option value="Commercial">Lomé ville</option>
                                            <option value="Commercial">Adidogomé</option>
                                            <option value="Commercial">Agoe</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-select font-14 form-select-md mb-3 mb-md-0" aria-label=".form-select-md example" name="property-status">
                                            <option selected>Filtrer par date</option>
                                            <option value="New">aujourd'hui</option>
                                            <option value="New">cette semaine</option>
                                            <option value="New">ce mois</option>
                                            <option value="New">Le plus récent d'abord</option>
                                            <option value="Old">Le plus ancien en premier</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="property-listing-meta">
                        <div class="home-featured-property">
                            <div class="row mt-5">
                                <div class="col-md-6">
                                    <div class="card v1-featured-property-card mb-4 border-0">
                                        <div class="featured-product-img position-relative">
                                            <img src="{{asset('assets/client/images/property-img/fe-property-img-1.jpg')}}" alt="featured-property" class="img-fluid w-100 fe-pro-img" />
                                            <div class="property-details mb-2">
                                                <h4 class="text-white mb-0">$13,000/<span>mo</span></h4>
                                                <div class="property-view ms-auto">
                                                    <a href="#"><i class="fas fa-exchange-alt"></i></a>
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="property-tag">
                                                <ul class="list-unstyled mb-0 list-inline">
                                                    <li class="bg-blue list-inline-item">A louer</li>
                                                    <li class="bg-green list-inline-item">Nouveau</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="text-orange mb-0">Apartment</p>
                                            <h4 class="font-20 product-title"><a href="page-property-single-v1.html" class="text-decoration-none">Modern Apartments</a></h4>
                                            <p><i class="fas fa-map-marker-alt"></i>Localisation</p>
                                            <ul class="list-unstyled d-flex justify-content-between mb-0">
                                                <li><p class="mb-0">3 <i class="fas fa-bed"></i></p>
                                                lits
                                                <li><p class="mb-0">2 <i class="fas fa-sink"></i></p>
                                                chambre
                                                <li><p class="mb-0">1250 <i class="fas fa-vector-square"></i>   </p>
                                                    salles de bains
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="property-footer border-top">
                                            <div class="card-body">
                                                <div class="property-footer-meta d-flex align-items-center">
                                                    <a href="#"><img src="{{asset('assets/client/images/user-icon.png')}}" alt="user-image" class="img-fluid"></a>
                                                    <div class="ms-3">
                                                        <h6 class="mb-0"><a href="#" class="text-decoration-none">Posté par</a></h6>
                                                        <p class="font-14 mb-0">Estate Agents</p>
                                                    </div>
                                                    <div class="property-year ms-auto">
                                                        <p class="mb-0">il y a 1 jour</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card v1-featured-property-card mb-4 border-0">
                                        <div class="featured-product-img position-relative">
                                            <img src="{{asset('assets/client/images/property-img/fe-property-img-1.jpg')}}" alt="featured-property" class="img-fluid w-100 fe-pro-img" />
                                            <div class="property-details mb-2">
                                                <h4 class="text-white mb-0">$13,000/<span>mo</span></h4>
                                                <div class="property-view ms-auto">
                                                    <a href="#"><i class="fas fa-exchange-alt"></i></a>
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="property-tag">
                                                <ul class="list-unstyled mb-0 list-inline">
                                                    <li class="bg-blue list-inline-item">A louer</li>
                                                    <li class="bg-danger list-inline-item">Ancien</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="text-orange mb-0">Type de Bien</p>
                                            <h4 class="font-20 product-title"><a href="page-property-single-v1.html" class="text-decoration-none">Modern Apartments</a></h4>
                                            <p><i class="fas fa-map-marker-alt"></i>Localisation</p>
                                            <ul class="list-unstyled d-flex justify-content-between mb-0">
                                                <li><p class="mb-0">3 <i class="fas fa-bed"></i></p>
                                                lits
                                                <li><p class="mb-0">2 <i class="fas fa-sink"></i></p>
                                                chambre
                                                <li><p class="mb-0">1250 <i class="fas fa-vector-square"></i>   </p>
                                                    salles de bains
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="property-footer border-top">
                                            <div class="card-body">
                                                <div class="property-footer-meta d-flex align-items-center">
                                                    <a href="#"><img src="{{asset('assets/client/images/user-icon.png')}}" alt="user-image" class="img-fluid"></a>
                                                    <div class="ms-3">
                                                        <h6 class="mb-0"><a href="#" class="text-decoration-none">Posté par</a></h6>
                                                        <p class="font-14 mb-0">Estate Agents</p>
                                                    </div>
                                                    <div class="property-year ms-auto">
                                                        <p class="mb-0">il y a 10 jour</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card v1-featured-property-card mb-4 border-0">
                                        <div class="featured-product-img position-relative">
                                            <img src="{{asset('assets/client/images/property-img/fe-property-img-1.jpg')}}" alt="featured-property" class="img-fluid w-100 fe-pro-img" />
                                            <div class="property-details mb-2">
                                                <h4 class="text-white mb-0">$13,000/<span>mo</span></h4>
                                                <div class="property-view ms-auto">
                                                    <a href="#"><i class="fas fa-exchange-alt"></i></a>
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="property-tag">
                                                <ul class="list-unstyled mb-0 list-inline">
                                                    <li class="bg-blue list-inline-item">A louer</li>
                                                    <li class="bg-danger list-inline-item">Ancien</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="text-orange mb-0">Piece</p>
                                            <h4 class="font-20 product-title"><a href="page-property-single-v1.html" class="text-decoration-none">Douche Interne</a></h4>
                                            <p><i class="fas fa-map-marker-alt"></i>Localisation</p>
                                            <ul class="list-unstyled d-flex justify-content-between mb-0">
                                                <li><p class="mb-0">3 <i class="fas fa-bed"></i></p>
                                                Douche interne
                                                <li><p class="mb-0">1<i class="fas fa-sink"></i></p>
                                                brasseur
                                                <li><p class="mb-0">1250 <i class="fas fa-vector-square"></i>   </p>
                                                    salles de bains
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="property-footer border-top">
                                            <div class="card-body">
                                                <div class="property-footer-meta d-flex align-items-center">
                                                    <a href="#"><img src="{{asset('assets/client/images/user-icon.png')}}" alt="user-image" class="img-fluid"></a>
                                                    <div class="ms-3">
                                                        <h6 class="mb-0"><a href="#" class="text-decoration-none">Posté par</a></h6>
                                                        <p class="font-14 mb-0">Estate Agents</p>
                                                    </div>
                                                    <div class="property-year ms-auto">
                                                        <p class="mb-0">il y a 10 jour</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')
<script>
    
</script>
@endsection