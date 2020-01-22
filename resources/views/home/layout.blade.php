<!DOCTYPE html>
<html>
	<head>
		<title>@yield('page_title')</title>

		<!-- Meta Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="We are the number one removal company in Pembrokeshire with over 40 years experience.">
		<meta name="keywords" content="Removals Pembrokeshire, Removals Carmarthenshire, Removals Cardiganshire, Removals Tenby, Removals Saundersfoot, Removals Kilgetty, Removals Pembroke, Removals Narberth, Removals Haverfordwest, Removals Europe, Removals France, Removals Ireland">
		<meta name="robots" content="noodp"/>
		<meta name="language" content="English">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta property="og:locale" content="en_GB" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="Websters Removals &amp; Storage - Pembrokeshire" />
		<meta property="og:description" content="We are the number one removal company in Pembrokeshire with over 40 years experience." />
		<meta property="og:url" content="http://webstersremovals.co.uk/" />
		<meta property="og:site_name" content="Websters Removals &amp; Storage - Pembrokeshire" />

		<!-- External -->
		<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet"> 
		<link rel="stylesheet" href="/css/home/main.css" />

		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body>
		<nav class="w-nav navbar navbar-expand-lg navbar-light">
			<a class="w-logo navbar-brand" href="#">Websters Removals</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="w-link nav-link" href="/">Home</a>
					</li>
					<li class="nav-item dropdown">
						<a class="w-link nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Our Services
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="/services/local-and-national">Local & National</a>
							<a class="dropdown-item" href="/services/storage">Storage</a>
							<a class="dropdown-item" href="/services/international-removals">International Removals</a>
							<a class="dropdown-item" href="/services/packing">Packing</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="w-link nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							About Us
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="/about/photo-gallery">Photo Gallery</a>
							<a class="dropdown-item" href="/about/testimonials">Testimonials</a>
							<a class="dropdown-item" href="/about/faq">FAQ</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="w-link nav-link" href="/request-a-quote">Request a Quote</a>
					</li>
				</ul>
			</div>
		</nav>

		@yield('banner-image')

		<div class="container" style="margin-top: 80px;">
			@yield('content')
		</div>

		@yield('full-view')

		<div class="container">
			<br /><br />
			<hr />
			<div class="d-md-flex justify-content-between">
				<div>
					Copyright &copy; Websters Removals Ltd {{ date("Y") }}. All Rights Reserved.
					<br />
					Built and managed by Ethan Webster | <a href="http://ethan-webster.com/" target="_blank">ethan-webster.com</a>
				</div>
				<div>
					<a href="/login">Admin Login</a>
				</div>
			</div>
		</div>

		<br /><br />

		<!-- JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://kit.fontawesome.com/64a4d46fd3.js" crossorigin="anonymous"></script>

		<script src="/js/home/main.js"></script>
		<script src="/js/home/testimonials.js"></script>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>

		@yield('scripts')
	</body>
</html>