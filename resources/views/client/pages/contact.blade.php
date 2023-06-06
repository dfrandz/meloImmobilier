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
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-white">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Contact</li>
                        </ul>
                        <h1 class="breadcrumb-title text-white">Contactez-nous</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <section class="contact-form-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 d-flex">
                    <div class="card border-0 w-100">
                        <div class="card-body p-4">
                            <h5>Hé, tu as une question ?</h5>
                            <p>Envoyez-le nous et nous vous répondrons dans les plus brefs délais.</p>
                            <form class="contact-form" id="contact-form" name="contact-form" action="#" method="post" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <input id="form-name" name="form-name" class="form-control" required="required" type="text" placeholder="Nom">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <input id="form-email" name="form-email" class="form-control required email" required="required" type="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <input id="form-phone" name="form-phone" class="form-control required phone" required="required" placeholder="telephone">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <input id="form-subject" name="form-subject" class="form-control required" required="required" type="text" placeholder="sujet">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <textarea id="form-message" name="form-message" class="form-control required" rows="8" required="required" placeholder="Votre Message"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-warning">Soumettre</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex">
                    <div class="card border-0 w-100 mt-5 mt-lg-0">
                        <div class="card-body p-4">
                            <h5>Contactez-nous</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In gravida quis libero eleifend ornare. habitasse platea dictumst.</p>

                            <div class="contact-item">
                                <ul class="social-icons ps-0">
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>

                            <div class="contact-item">
                                <h5 class="font-18">Address</h5>
                                <p>2780 River Road, Colorado Springs, USA</p>
                            </div>
                            
                            <div class="contact-item">
                                <h5 class="font-18">Phone</h5>
                                <p>9876543210</p>
                            </div>

                            <div class="contact-item">
                                <h5 class="font-18">Mail</h5>
                                <p>info@example.com</p>
                            </div>

                            <div class="contact-item">
                                <h5 class="font-18">Website</h5>
                                <p>example.com</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('scripts')
<script>
    
</script>
@endsection