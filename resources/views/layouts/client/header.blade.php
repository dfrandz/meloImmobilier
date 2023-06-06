<header class="topbar bg-blue">
    <div class="container">
        <div class="header">
            <nav class="navbar navbar-expand-lg navbar-dark top-navbar">
                <a class="navbar-brand" href="https://code-wrapper.com/royal-homes">
                    <img src="assets/images/logo1.png" class="logo logo-white" alt="LOGONE REALTY">
                    <img src="assets/images/logo-dark.png" class="logo logo-dark" alt="LOGONE REALTY">
                </a>
                
                <button class="navbar-toggler ms-auto " type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsible-menu" aria-controls="collapsible-menu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="hamburger">
                        <span class="hamburger-top"></span>
                        <span class="hamburger-bottom"></span>
                    </span>
                </button>
                <a href="#" class="text-white d-lg-none d-block">
                <i class="fas fa-user-circle font-22 mt-1"></i></a>
                <div class="collapse navbar-collapse" id="collapsible-menu">
                    <ul class="navbar-nav ms-auto primary-menu">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{route('home')}}" id="main-menu" role="button">Acceuil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('location')}}" id="main-menu" role="button" >Location</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('vente')}}" id="main-menu" role="button">En Vente</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('hotel')}}" id="main-menu" role="button">Meuble</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('hotel')}}" id="main-menu" role="button">Hotels</a>
                        </li>
                        <li class="nav-item dropdown">
                            {{-- <a class="nav-link" href="javascript: void(0)" id="main-menu" role="button">Blog</a> --}}
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}">Contact</a>
                        </li>
                    </ul>
                    <a href="{{route('login')}}" class="btn btn-warning py-2 px-4 d-lg-block d-none">LOGIN</a>
                </div>
            </nav>
        </div>               
    </div>
</header>