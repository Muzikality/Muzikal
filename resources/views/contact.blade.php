@extends('layouts.app')
	<!-- Header section end -->
	

	@section('content')
	<!-- Contact section -->
	<section class="contact-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 p-0">
					<!-- Map -->
					<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15958.628416152262!2d37.4574674!3d-0.5150709!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ske!4v1617096045748!5m2!1sen!2ske" style="border:0" allowfullscreen></iframe></div>
				</div>
				<div class="col-lg-6 p-0">
					<div class="contact-warp">
						<div class="section-title mb-0">
							<h2>Get in touch</h2>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore mag na aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doe iusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
						<ul>
							<li>Main Road , No 25/11</li>
							<li>+34 556788 3221</li>
							<li>contact@solmusic.com</li>
						</ul>
						<form class="contact-from">
							<div class="row">
								<div class="col-md-6">
									<input type="text" placeholder="Your name">
								</div>
								<div class="col-md-6">
									<input type="text" placeholder="Your e-mail">
								</div>
								<div class="col-md-12">
									<input type="text" placeholder="Subject">
									<textarea placeholder="Message"></textarea>
									<button class="site-btn">send message</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->

@endsection
