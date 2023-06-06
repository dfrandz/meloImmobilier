@extends('../../../layouts/client/index')

@section('property')
  
@endsection


@section('title')
  <title>Login</title>
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
                            <li class="breadcrumb-item active text-white" aria-current="page">Login</li>
                        </ul>
                        <h1 class="breadcrumb-title text-white">Login</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->
    <section class="page-login-section pb-5">
            <div class="container">
                <h1 class="text-center">Commençons !!!</h1>
                <p class="text-center text-dark mb-0 font-averta-bold mt-5"> 
                    Connectez-vous avec votre compte social</p>
                <div class="social-login-btns text-center mt-3 mb-5">
                    <button class="btn bg-blue text-white px-3 py-2 me-md-4"><i class="fab fa-facebook-square me-3"></i> Facebook</button>
                    <button class="btn btn-warning text-white px-3 py-2"><i class="fab fa-google me-3"></i> Google</button>
                </div> 

                <div class="row">
                    <div class="col-md-6">
                        <h3 class="login-title pt-4 pb-4 font-18">Connectez-vous à votre compte</h3>
                        <form class="login-form">
                            <div class="mb-3">
                                <input type="email" class="form-control font-14" id="login-uemail" placeholder="Email Address">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control font-14" id="login-upass" placeholder="Password">
                            </div>
                            <div class="mb-4 form-check">
                                <input type="checkbox" class="form-check-input" id="remember">
                                <label class="form-check-label" for="remember">Remember Me</label>
                            </div>
                            <button type="submit" class="btn btn-warning login-btn">Login</button>
                        </form>
                    </div>

                    <div class="col-md-6">
                        <h3 class="login-title pt-4 pb-4 font-18">Enregistrer votre compte</h3>
                        <form class="register-form">
                            <div class="mb-3">
                                <input type="text" class="form-control font-14" id="reg-uname" placeholder="Username">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control font-14" id="reg-uemail" placeholder="Email Address">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control font-14" id="reg-upass" placeholder="Password">
                            </div>
                            <div class="mb-4">
                                <input type="password" class="form-control font-14" id="reg-uconpass" placeholder="Repeat Password">
                            </div>
                            <button type="submit" class="btn btn-warning login-btn">Register</button>
                        </form>
                    </div>
                </div>

            </div>
        </section>
@endsection


@section('scripts')
<script>
    
</script>
@endsection