@extends('home.layout')

@section('page_title')
	Websters Removals & Storage - Pembrokeshire
@endsection

@section('banner-image')
	<div class="banner-image" style="background-image: url('/img/home-banner.jpg');">
	</div>
		<div class="banner-text">
			<h1>Websters Removals</h1>
			<p>Trusted by Pembrokeshire families since 1969</p>
		</div>
@endsection

@section('content')
	<div class="view-fader">
		<div class="media">
			<img src="/img/img-home-3.jpg" class="img-box align-self-start mr-3">
			<div class="media-body">
				<h5 class="mt-0">Your local removal company</h5>
				<p>A family business moving families since 1969. Our modern purpose built removal trucks and trained uniformed fully employed staff can move your household locally, nationwide and worldwide. Please give us a call and rely on our fifty years of experience.</p>
				<a target="_blank" href="https://www.facebook.com/WebstersRemovals" class="btn btn-primary">
					<i class="fa fa-thumbs-up" style="color: #fff;"></i> Like Us On Facebook</a>
			</div>
		</div>
	</div>

	<div class="view-fader">
		<div class="media">
			<img src="/img/img-home-2.jpg" class="img-box align-self-start mr-3">
			<div class="media-body">
				<h5 class="mt-0">Contact us today</h5>
				<p>If you would like to speak to a representative regarding your removal/storage requirements or to book a free no obligation on site survey, contact us either by phone or email!</p>
				<p><i class="fa fa-phone"></i> 01834 843429</p>
				<p><i class="fa fa-at"></i> webstersremovals@btconnect.com</p>
			</div>
		</div>
	</div>
	
@endsection

@section('full-view')
	<iframe id="location-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2474.3472106264967!2d-4.711619684858435!3d51.671787306492284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486ecb632e643607%3A0xa276035e98ec90de!2sWebsters%20Removals%20Limited!5e0!3m2!1sen!2suk!4v1579607174579!5m2!1sen!2suk" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
@endsection