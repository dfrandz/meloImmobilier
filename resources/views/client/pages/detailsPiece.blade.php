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
                                <a type="button" class="btn btn-outline-warning" >Reserver</a>
                                <a type="button" class="btn btn-outline-info" href="#visiter">Visiter</a>
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
                <div class="carousel-caption d-md-block">
                    <button type="button" class="btn btn-danger">Warning</button>
                    <span class="badge text-bg-info">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                </div>
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
                        <h4 class="border-bottom pb-3 mb-4 font-20">Descriptif du bien</h4>
                        <ul class="list-inline">
                            <li>Air Conditioning</li>
                            <li>Barbeque</li>
                            <li>Dryer</li>
                            <li>Gym</li>
                        </ul>
                    </div>
                    <div class="property-floors mb-5">
                        <h4 class="border-bottom pb-3 mb-4 font-20">A propos du prix</h4>

                        <div class="accordion" id="accordionFloor">
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingOne">
                                    <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" role="list">
                                        Info
                                    </div>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionFloor">
                                    <div class="accordion-body">
                                        <table class="table table-bordered border-primary">
                                            <thead>
                                                <tr>
                                                  <th scope="col">Loyer charges comprises</th>
                                                  <td>655 € / mois</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                  <th scope="col">Honoraires TTC à la charge du locataire</th>
                                                  <td>429 €</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="d-grid gap-3 d-md-block mb-2">
                        <button type="button" class="btn btn-outline-warning">Voir le numero</button>
                        <button type="button" class="btn btn-outline-warning">Voir le numero</button>
                        <button type="button" class="btn btn-outline-warning">Voir le numero</button>
                    </div> --}}
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="sidebar-agent-form mb-5">
                        <div class="card">
                            <div class="card-body p-4 border-bottom pb-2">
                                <div class="agent-contact-detail-sidebar" id="visiter">
                                    <h5 style="text-align: center">Contacter ce professionnel</h5>
                                    <p style="text-align: center">Proposé exclusivement par</p>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <a href="#"><img src="{{asset("assets/client/images/blog/7.jpg")}}" class="img-fluid h-100 rounded top-pro-image" alt="blog-image"></a>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="mb-0 mt-2 mt-md-0"><a href="#" class="text-decoration-none">LOGONE REALTY</a></h6>
                                            <ul class="property-rating list-inline mb-0">
                                                <li class="list-inline-item me-0"><a href="#"><i class="fas fa-star text-warning"></i></a></li>
                                                <li class="list-inline-item me-0"><a href="#"><i class="fas fa-star text-warning"></i></a></li>
                                                <li class="list-inline-item me-0"><a href="#"><i class="fas fa-star text-warning"></i></a></li>
                                                <li class="list-inline-item me-0"><a href="#"><i class="fas fa-star text-warning"></i></a></li>
                                                <li class="list-inline-item me-0"><a href="#"><i class="fas fa-star text-warning"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Voir le numero</button>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            ...
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-4">
                                <div class="agent-contact-form-sidebar">
                                    <form id="agent-form" name="agent-form" method="POST">
                                        <input type="text" id="fname" name="full_name" class="form-control mb-3 font-14" placeholder="Votre nom" required="">
                                        <input type="text" id="pnumber" name="p_number" class="form-control mb-3 font-14" placeholder="Votre numero" required="">
                                        <input type="email" id="emailid" name="email_address" class="form-control mb-3 font-14" placeholder="Votre email" required="">
                                        <textarea rows="5" name="message" class="form-control mb-3 font-14" placeholder="Bonjour, je suis vivement intéressé par ce bien, merci de me recontacter pour plus d'informations. Bien cordialement" required=""></textarea>
                                        <input type="submit" name="request" class="btn btn-warning w-100 agent-contact-btn" value="Envoyez">
                                    </form>
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
