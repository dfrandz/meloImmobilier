@extends('../../../layouts/client/index')

@section('property')
@endsection


@section('title')
    <title>info</title>
@endsection

@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
<style>
    .map-container-2{
        overflow:hidden;
        padding-bottom:56.25%;
        position:relative;
        height:0;
    }
    .map-container-2 iframe{
        left:0;
        top:0;
        height:100%;
        width:100%;
        position:absolute;
    }
</style>
@endsection


@section('content')
    <section class="property-listing-title">
        <div class="container">
            <div class="row align-items-baseline">
                <div class="col-lg-7">
                    <div class="d-md-flex align-items-baseline property-title">
                        <div class="property-title">
                            <h1 class="font-30">Luxury Family Home</h1>
                            <p class="mb-0">1421 San Pedro St, Los Angeles, CA 90015</p>
                        </div>

                        <div class="property-tag ms-md-auto ms-lg-3">
                            <ul class="list-inline">
                                <li class="bg-orange list-inline-item">For Rent</li>
                                <li class="bg-green list-inline-item">Featured</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="d-md-flex align-items-center property-amnt">
                        <h2 class="font-30">$15,000/<span>mo</span></h2>
                        <ul class="list-inline mt-3 mt-md-0 mb-0 ms-md-auto property-options ">
                            <li class="list-inline-item">
                                <a href="#"><i class="fas fa-exchange-alt"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="far fa-heart"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fas fa-share-alt"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript:void(0)" onclick="window.print()"><i class="fas fa-print"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="property-img-gallery">
        <div class="owl-carousel owl-theme property-img-carousal mt-5">
            <div class="property-item">
                <img src="{{asset("assets/client/images/property-img/property-img-1.jpg")}}" alt="property-img" class="property-img" />
            </div>
            <div class="property-item">
                <img src="{{asset("assets/client/images/property-img/property-img-2.jpg")}}" alt="property-img" class="property-img" />
            </div>
            <div class="property-item">
                <img src="{{asset("assets/client/images/property-img/property-img-3.jpg")}}" alt="property-img" class="property-img" />
            </div>
            <div class="property-item">
                <img src="{{asset("assets/client/images/property-img/property-img-5.jpg")}}" alt="property-img" class="property-img" />
            </div>
            <div class="property-item">
                <img src="{{asset("assets/client/images/property-img/property-img-6.jpg")}}" alt="property-img" class="property-img" />
            </div>
        </div>
        <div class="property-slider_nav">
            <span class="property-prev">
                <i class="fas fa-chevron-left"></i>
            </span>

            <span class="property-next ml-3">
                <i class="fas fa-chevron-right"></i>
            </span>

        </div>
    </div>

    <section class="property-details-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="property-description mb-5">
                        <h4 class="border-bottom pb-3 mb-4 font-20">Description</h4>

                        <ul class="list-inline property-desc">
                            <li class="list-inline-item">3 Bedrooms</li>
                            <li class="list-inline-item">2 Bathrooms</li>
                            <li class="list-inline-item">1250 square Ft</li>
                        </ul>

                        <p>Aliquam vitae sem id sem efficitur interdum. Phasellus ut nulla nisi. Sed varius, lacus ac laoreet pharetra, metus quam rutrum enim, quis rhoncu estibulum sed maximus elit. Quisque semper facilisis sem, sed tempus nisl laoreet sed. Donec ex turpis, pharetra luctus lacus quis, eleifend.</p>
                        <p>Many desktop publishing fact thagr or reader will distracted packages and webing page of their publishing for lorem ipsum’ will their infancy.</p>
                        <p>Many desktop publishing fact thagr or reader will distracted packages and webing page of their publishing for lorem ipsum’ will their infancy.</p>
                    </div>
                
                    <div class="property-amenities mb-5">
                        <h4 class="border-bottom pb-3 mb-4 font-20">Ce que propose ce logement</h4>
                        <ul class="list-inline">
                            <li><i class="bi bi-wifi"></i> Wifi</li>
                            <li><i class="bi bi-tv"></i> Tv</li>
                            <li><i class="bi bi-wifi"></i> Cuisine</li>
                            <li><i class="bi bi-car-front-fill"></i> Parking</li>
                            <li><i class="bi bi-fan"></i> Climatisation</li>
                            <li><i class="bi bi-wifi"></i> Wifi</li>
                            <li><i class="bi bi-wifi"></i> Wifi</li>
                            <li><i class="bi bi-wifi"></i> Wifi</li>
                            <li><i class="bi bi-wifi"></i> Wifi</li>
                        </ul>
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Afficher les autre equipements</button>
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content modal-dialog-scrollable">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Ce que propose ce logement</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h6 class="pb-3 mb-2 font-20">Property Attachments</h6>
                                    <div class="property-document-meta d-md-flex">
                                        <div class="document-icon-box d-flex align-items-center">
                                            <div class="document-icon">
                                                <i class="far fa-file-word font-30 text-orange"></i>
                                            </div>
                                            <div class="document-details ms-3">
                                                <h5 class="font-16"><i class="fas fa-download me-2 text-orange"></i> Demo Word Document</h5>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <hr>
                                    <h6 class="pb-3 mb-2 font-20">Property Attachments</h6>
                                    <div class="property-document-meta d-md-flex">
                                        <div class="document-icon-box d-flex align-items-center">
                                            <div class="document-icon">
                                                <i class="far fa-file-word font-30 text-orange"></i>
                                            </div>
                                            <div class="document-details ms-3">
                                                <h5 class="font-16"><i class="fas fa-download me-2 text-orange"></i> Demo Word Document</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <h6 class="pb-3 mb-2 font-20">Property Attachments</h6>
                                    <div class="property-document-meta d-md-flex">
                                        <div class="document-icon-box d-flex align-items-center">
                                            <div class="document-icon">
                                                <i class="far fa-file-word font-30 text-orange"></i>
                                            </div>
                                            <div class="document-details ms-3">
                                                <h5 class="font-16"><i class="fas fa-download me-2 text-orange"></i> Demo Word Document</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <h6 class="pb-3 mb-2 font-20">Property Attachments</h6>
                                    <div class="property-document-meta d-md-flex">
                                        <div class="document-icon-box d-flex align-items-center">
                                            <div class="document-icon">
                                                <i class="far fa-file-word font-30 text-orange"></i>
                                            </div>
                                            <div class="document-details ms-3">
                                                <h5 class="font-16"><i class="fas fa-download me-2 text-orange"></i> Demo Word Document</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <h6 class="pb-3 mb-2 font-20">Property Attachments</h6>
                                    <div class="property-document-meta d-md-flex">
                                        <div class="document-icon-box d-flex align-items-center">
                                            <div class="document-icon">
                                                <i class="far fa-file-word font-30 text-orange"></i>
                                            </div>
                                            <div class="document-details ms-3">
                                                <h5 class="font-16"><i class="fas fa-download me-2 text-orange"></i> Demo Word Document</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="pb-3 mb-2 font-20">Property Attachments</h6>
                                    <div class="property-document-meta d-md-flex">
                                        <div class="document-icon-box d-flex align-items-center">
                                            <div class="document-icon">
                                                <i class="far fa-file-word font-30 text-orange"></i>
                                            </div>
                                            <div class="document-details ms-3">
                                                <h5 class="font-16"><i class="fas fa-download me-2 text-orange"></i> Demo Word Document</h5>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="sidebar-agent-form mb-5">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="agent-contact-form-sidebar">
                                    <form id="agent-form" name="agent-form" method="POST" class="mb-2">
                                        <h3 class="mb-2">Voir les disponibilités</h3>
                                        <div class="row mb-3">
                                            <div class="col">
                                              <input type="text" class="form-control" value="$0/Nuit" disabled>
                                            </div>
                                            <div class="col">
                                              <input type="text" class="form-control" value="info" disabled>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="date" class="form-control" id="exampleFormControlInput1">
                                            <label for="floatingSelect">date arriver</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="date" class="form-control" id="exampleFormControlInput1">
                                            <label for="floatingSelect">date depart</label>
                                        </div>
                                        
                                        <input type="submit" name="request" class="btn btn-warning w-100 agent-contact-btn" value="Reservez Maintenant">
                                    </form>
                                    <p style="text-align: center">Lorem ipsum dolor sit, amet consectetur adipisicing elit</p>
                                    <div class="row mb-1">
                                        <div class="col">
                                            <span>25$x16 nuits</span>
                                        </div>
                                        <div class="col-3">
                                            <span>00$</span>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col">
                                            <span>Frais de service Airbnb</span>
                                        </div>
                                        <div class="col-3">
                                            <span>000$</span>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mb-1">
                                        <div class="col">
                                            <h5>Total</h5>
                                        </div>
                                        <div class="col-4">
                                            <h5>000$</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('scripts')
    <script></script>
@endsection
