@extends('home.layout')

@section('page_title')
	Storage | Websters Removals & Storage
@endsection

@section('banner-image')
	<div class="banner-image" style="background-image: url('/img/img-storage-1.jpg');">
	</div>
		<div class="banner-text">
			<h1>Storage</h1>
			<p>We provide dry secure storage solutions for both long and short term</p>
		</div>
@endsection

@section('content')
	<div class="view-fader">
		<div class="media">
			<img src="/img/img-storage-2.jpg" class="img-box align-self-start mr-3">
			<div class="media-body">
				<h5 class="mt-0">Storage</h5>
				<p>During the course of your removal we recognise that storage of your goods may be required. Websters Removals Limited have been storing customers goods for over 40 years, and take great care in the handling and safe storage of household goods.</p>
			</div>
		</div>
	</div>
	<div class="view-fader">
		<div class="media">
			<img src="/img/img-storage-3.jpg" class="img-box align-self-start mr-3">
			<div class="media-body">
				<h5 class="mt-0">Facilities</h5>
				<p>All customer goods are stored in safe, secure, dry environments such as twenty-foot shipping containers or in our warehouse.</p>
			</div>
		</div>
	</div>
@endsection