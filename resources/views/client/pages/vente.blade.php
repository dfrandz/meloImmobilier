@extends('../../../layouts/client/index')

@section('property')
  
@endsection


@section('title')
  <title>vente</title>
@endsection

@section('style')
@endsection


@section('content')

    <div class="property-grid-listing">
        <div class="blog-single-breadcrumb mb-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="breadcrumb-content">
                            <ul class="breadcrumb">
                                {{-- <li class="breadcrumb-item active" aria-current="page">meilleur en vente</li> --}}
                            </ul>
                            <h1 class="breadcrumb-title font-30 mt-3">Meilleur en vente</h1>
                        </div>
                    </div>
                    <div class="col-md-4 text-end">
                        <button type="button" class="btn btn-warning px-4 py-2" data-bs-toggle="modal" data-bs-target="#searchModal">Afficher le filtre<i class="fas fa-sort ms-2"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="property-listing-section pb-5">
            <div class="container">
                        
                <div class="grid-search-result">
                    <div class="card border-0">
                        <div class="card-body px-4">
                            <div class="row align-items-center">
                                <div class="col-lg-8 col-md-6">
                                    <p class="mb-md-0 text-dark font-14">10 Résultats de la recherche</p>
                                </div>
                                {{-- <div class="col-lg-2 col-md-3">
                                    <select class="form-select font-14 form-select-md mb-3 mb-md-0" aria-label=".form-select-md example" name="property-status">
                                        <option selected>Status</option>
                                        <option value="For Sale">For Sale</option>
                                    </select>
                                </div> --}}
                                <div class="col-lg-2 col-md-3">
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
                            <div class="col-lg-4 col-md-6">
                                <div class="card v1-featured-property-card mb-4 border-0">
                                    <div class="featured-product-img position-relative">
                                        <img src="{{asset("assets/client/images/property-img/fe-property-img-6.jpg")}}" alt="featured-property" class="img-fluid w-100 fe-pro-img" />
                                        <div class="property-details mb-2">
                                            <h4 class="text-white mb-0">$13,000/<span>mois</span></h4>
                                            <div class="property-view ms-auto">
                                                <a href="#"><i class="fas fa-exchange-alt"></i></a>
                                                <a href="#"><i class="far fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="property-tag">
                                            <ul class="list-unstyled mb-0">
                                                <li class="bg-blue">À vendre</li>
                                            </ul>
                                        </div>
                                        <span class="featured-property me-2 text-white bg-green"><i class="fas fa-star font-12"></i></span>
                                        <span class="hot-property me-2 text-white bg-orange"><i class="fas fa-fire font-12"></i></span>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-orange mb-0">Villa</p>
                                        <h4 class="font-20 product-title"><a href="page-property-single-v1.html" class="text-decoration-none">Villa Moderne</a></h4>
                                        <p><i class="fas fa-map-marker-alt"></i>Localisation</p>
                                        <ul class="list-unstyled d-flex justify-content-between mb-0">
                                            <li><p class="mb-0">3 <i class="fas fa-bed"></i></p>
                                            chambre
                                            <li><p class="mb-0">2 <i class="fas fa-sink"></i></p>
                                            Salle de bain
                                            <li><p class="mb-0">1250 <i class="fas fa-vector-square"></i>   </p>
                                                espace
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="property-footer border-top">
                                        <div class="card-body">
                                            <div class="property-footer-meta d-flex align-items-center">
                                                <a href="#"><img src="{{asset("assets/client/images/user-icon.png")}}" alt="user-image" class="img-fluid"></a>
                                                <div class="ms-3">
                                                    <h6 class="mb-0"><a href="#" class="text-decoration-none">Johnathan Doe</a></h6>
                                                    <p class="font-14 mb-0">Estate Agents</p>
                                                </div>
                                                <div class="property-year ms-auto">
                                                    <p class="mb-0">il y a 2 jours</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                             
                        </div>
                    </div>
                    <div class="blog-post-pagination mt-4">
                        <ul class="page-navigation list-inline text-center">
                            <li class="page-item list-inline-item">
                                <a class="page-link" href="#" tabindex="-1"><i class="fas fa-arrow-left"></i></a>
                            </li>
                            <li class="page-item list-inline-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item list-inline-item active" aria-current="page">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item list-inline-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item list-inline-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item list-inline-item"><a class="page-link" href="#">29</a></li>
                            <li class="page-item list-inline-item">
                                <a class="page-link" href="#"><i class="fas fa-arrow-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                        
            </div>
        </div>
    </div>

    <!-- Filter Modal -->
    <div class="modal fade fade-scale" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="searchModalLabel">Plus d Options</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="search-property-modal">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <input type="text" class="form-control font-14 mb-3" name="mo-keyword" placeholder="Enter Keywords..." value="">
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <select class="form-select font-14 form-select-md mb-3" aria-label=".form-select-md example" name="mo-property-type">
                                    <option selected="">Property Type</option>
                                    <option value="Residential">Residential</option>
                                    <option value="Commercial">Commercial</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <select class="form-select font-14 form-select-md mb-3" aria-label=".form-select-md example" name="mo-property-location">
                                    <option selected="">Location</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <select class="form-select form-select-md mb-3 font-14" aria-label=".form-select-md example" name="mo-property-status">
                                    <option selected="">Status</option>
                                    <option value="Any">Any</option>
                                    <option value="For Rent">For Rent</option>
                                    <option value="For Sale">For Sale</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <select class="form-select form-select-md mb-3 font-14" aria-label=".form-select-md example" name="mo-property-rooms">
                                    <option selected="">Max Rooms</option>
                                    <option value="1">1 Rooms</option>
                                    <option value="2">2 Rooms</option>
                                    <option value="3">3 Rooms</option>
                                    <option value="4">4 Rooms</option>
                                    <option value="5">5 Rooms</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <select class="form-select form-select-md mb-3 font-14" aria-label=".form-select-md example" name="mo-property-bed">
                                    <option selected="">Bedrooms</option>
                                    <option value="1">1 Bedrooms</option>
                                    <option value="2">2 Bedrooms</option>
                                    <option value="3">3 Bedrooms</option>
                                    <option value="4">4 Bedrooms</option>
                                    <option value="5">5 Bedrooms</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <select class="form-select form-select-md mb-3 font-14" aria-label=".form-select-md example" name="mo-property-bath">
                                    <option selected="">Bathrooms</option>
                                    <option value="1">1 Bathrooms</option>
                                    <option value="2">2 Bathrooms</option>
                                    <option value="3">3 Bathrooms</option>
                                    <option value="4">4 Bathrooms</option>
                                    <option value="5">5 Bathrooms</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <select class="form-select form-select-md mb-3 font-14" aria-label=".form-select-md example" name="mo-property-year">
                                    <option selected="">Year Built</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <select class="form-select form-select-md mb-3 font-14" aria-label=".form-select-md example" name="mo-property-agent">
                                    <option selected="">Agents</option>
                                    <option value="Agent 1">Agent 1</option>
                                    <option value="Agent 2">Agent 2</option>
                                    <option value="Agent 3">Agent 3</option>
                                    <option value="Agent 4">Agent 4</option>
                                    <option value="Agent 5">Agent 5</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <input type="text" name="mo-min-price" class="form-control font-14 mb-3" placeholder="Min Price">
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <input type="text" name="mo-max-price" class="form-control font-14 mb-3" placeholder="Max Price">
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <input type="text" name="mo-min-area" class="form-control font-14 mb-3" placeholder="Min Area">
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <input type="text" name="mo-max-area" class="form-control font-14 mb-3" placeholder="Max Area">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-3 col-xs-12 col-sm-4 col-md-6 pb-2">
                                <div class="form-check d-flex align-items-center">
                                    <input id="Dining-Room" class="form-check-input font-14" type="checkbox" name="amenities[]" value="Dining Room">
                                    <label for="Dining-Room" class="ms-2 form-check-label font-14">Dining Room</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-12 col-sm-4 col-md-6 pb-2">
                                <div class="form-check d-flex align-items-center">
                                    <input id="Family-Room" class="form-check-input font-14" type="checkbox" name="amenities[]" value="Family Room">
                                    <label for="Family-Room" class="ms-2 form-check-label font-14">Family Room</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-12 col-sm-4 col-md-6 pb-2">
                                <div class="form-check d-flex align-items-center">
                                    <input id="Air-Condition" class="form-check-input font-14" type="checkbox" name="amenities[]" value="Air Condition">
                                    <label for="Air-Condition" class="ms-2 form-check-label font-14">Air Condition</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-12 col-sm-4 col-md-6 pb-2">
                                <div class="form-check d-flex align-items-center">
                                    <input id="Cooling-System" class="form-check-input font-14" type="checkbox" name="amenities[]" value="Cooling System">
                                    <label for="Cooling-System" class="ms-2 form-check-label font-14">Cooling System</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-12 col-sm-4 col-md-6 pb-2">
                                <div class="form-check d-flex align-items-center">
                                    <input id="Heating-System" class="form-check-input font-14" type="checkbox" name="amenities[]" value="Heating System">
                                    <label for="Heating-System" class="ms-2 form-check-label font-14">Heating System</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-12 col-sm-4 col-md-6 pb-2">
                                <div class="form-check d-flex align-items-center">
                                    <input id="Central-Cooling" class="form-check-input font-14" type="checkbox" name="amenities[]" value="Central Cooling">
                                    <label for="Central-Cooling" class="ms-2 form-check-label font-14">Central Cooling</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-12 col-sm-4 col-md-6 pb-2">
                                <div class="form-check d-flex align-items-center">
                                    <input id="Central-Heating" class="form-check-input font-14" type="checkbox" name="amenities[]" value="Central Heating">
                                    <label for="Central-Heating" class="ms-2 form-check-label font-14">Central Heating</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-12 col-sm-4 col-md-6 pb-2">
                                <div class="form-check d-flex align-items-center">
                                    <input id="Dishwasher" class="form-check-input font-14" type="checkbox" name="amenities[]" value="Dishwasher">
                                    <label for="Dishwasher" class="ms-2 form-check-label font-14">Dishwasher</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-12 col-sm-4 col-md-6 pb-2">
                                <div class="form-check d-flex align-items-center">
                                    <input id="Fireplace" class="form-check-input font-14" type="checkbox" name="amenities[]" value="Fireplace">
                                    <label for="Fireplace" class="ms-2 form-check-label font-14">Fireplace</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-12 col-sm-4 col-md-6 pb-2">
                                <div class="form-check d-flex align-items-center">
                                    <input id="Fire-Alarm" class="form-check-input font-14" type="checkbox" name="amenities[]" value="Fire Alarm">
                                    <label for="Fire-Alarm" class="ms-2 form-check-label font-14">Fire Alarm</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-12 col-sm-4 col-md-6 pb-2">
                                <div class="form-check d-flex align-items-center">
                                    <input id="Emergency-Exit" class="form-check-input font-14" type="checkbox" name="amenities[]" value="Emergency Exit">
                                    <label for="Emergency-Exit" class="ms-2 form-check-label font-14">Emergency Exit</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-12 col-sm-4 col-md-6 pb-2">
                                <div class="form-check d-flex align-items-center">
                                    <input id="Elevator" class="form-check-input font-14" type="checkbox" name="amenities[]" value="Elevator">
                                    <label for="Elevator" class="ms-2 form-check-label font-14">Elevator</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-12 col-sm-4 col-md-6 pb-2 pb-lg-0">
                                <div class="form-check d-flex align-items-center">
                                    <input id="Garden" class="form-check-input font-14" type="checkbox" name="amenities[]" value="Garden">
                                    <label for="Garden" class="ms-2 form-check-label font-14">Garden</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-12 col-sm-4 col-md-6 pb-2 pb-lg-0">
                                <div class="form-check d-flex align-items-center">
                                    <input id="Parking" class="form-check-input font-14" type="checkbox" name="amenities[]" value="Parking">
                                    <label for="Parking" class="ms-2 form-check-label font-14">Parking</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-12 col-sm-4 col-md-6 pb-2 pb-lg-0">
                                <div class="form-check d-flex align-items-center">
                                    <input id="Balcony" class="form-check-input font-14" type="checkbox" name="amenities[]" value="Balcony">
                                    <label for="Balcony" class="ms-2 form-check-label font-14">Balcony</label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-12 col-sm-4 col-md-6 pb-2 pb-lg-0">
                                <div class="form-check d-flex align-items-center">
                                    <input id="Home-Theater" class="form-check-input font-14" type="checkbox" name="amenities[]" value="Home Theater">
                                    <label for="Home-Theater" class="ms-2 form-check-label font-14">Home Theater</label>
                                </div>
                            </div>
                        </div>
                        <div class="text-end mt-4 border-top pt-3">
                            <button type="button" class="btn btn-warning px-4 py-2">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
<script>
    
</script>
@endsection