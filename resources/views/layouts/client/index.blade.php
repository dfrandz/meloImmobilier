<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from code-wrapper.com/royal-homes/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Mar 2023 12:54:46 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
    @yield('property')
    @yield('title')
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">

	<!-- Fonts  -->
	{{-- <link rel="preconnect" href="https://fonts.gstatic.com/">
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"> --}}

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;1,100;1,200&family=Satisfy&family=Sofia+Sans+Condensed:wght@1&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    @yield('style')
	<!-- Style CSS -->
	<link rel="stylesheet" href="{{asset('assets/client/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/client/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/client/css/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="{{asset('/assets/client/libs/fontawesome/css/all.css')}}">
	<link rel="stylesheet" href="{{asset('assets/client/css/animate.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/client/css/style.css')}}">

</head>
<body>

	<div class="main-wrapper">
		<!-- Header -->
        @include('layouts.client.header')

        <!-- content -->
        @yield('content')
		
		<!-- Footer -->
		@include('layouts.client.footer')
	</div>

	<!-- Required JS -->
	<script src="{{asset('assets/client/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset("assets/client/js/jquery.min.js")}}"></script>
	<script src="{{asset("assets/client/js/owl.carousel.min.js")}}"></script>
	<script src="{{asset("assets/client/libs/fontawesome/js/all.js")}}"></script>
	<script src="{{asset("assets/client/js/isotope.pkgd.min.js")}}"></script>
	<script src="{{asset("assets/client/js/custom.js")}}"></script>
	    
    <script>

    	var TxtType = function(el, toRotate, period) {
    		this.toRotate = toRotate;
    		this.el = el;
    		this.loopNum = 0;
    		this.period = parseInt(period, 10) || 2000;
    		this.txt = '';
    		this.tick();
    		this.isDeleting = false;
    	};
    
    	TxtType.prototype.tick = function() {
    		var i = this.loopNum % this.toRotate.length;
    		var fullTxt = this.toRotate[i];
    
    		if (this.isDeleting) {
    			this.txt = fullTxt.substring(0, this.txt.length - 1);
    		} else {
    			this.txt = fullTxt.substring(0, this.txt.length + 1);
    		}
    
    		this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';
    
    		var that = this;
    		var delta = 200 - Math.random() * 100;
    
    		if (this.isDeleting) { delta /= 2; }
    
    		if (!this.isDeleting && this.txt === fullTxt) {
    			delta = this.period;
    			this.isDeleting = true;
    		} else if (this.isDeleting && this.txt === '') {
    			this.isDeleting = false;
    			this.loopNum++;
    			delta = 500;
    		}
    
    		setTimeout(function() {
    			that.tick();
    		}, delta);
    	};
    
    	window.onload = function() {
    		var elements = document.getElementsByClassName('typewrite');
    		for (var i=0; i<elements.length; i++) {
    			var toRotate = elements[i].getAttribute('data-type');
    			var period = elements[i].getAttribute('data-period');
    			if (toRotate) {
    				new TxtType(elements[i], JSON.parse(toRotate), period);
    			}
    		}
    
    	// INJECT CSS
    	var css = document.createElement("style");
    	css.type = "text/css";
    	css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    	document.body.appendChild(css);
    
    };
    </script>
	
	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

	@yield('scripts')
</body>

<!-- Mirrored from code-wrapper.com/royal-homes/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Mar 2023 12:55:29 GMT -->
</html>
